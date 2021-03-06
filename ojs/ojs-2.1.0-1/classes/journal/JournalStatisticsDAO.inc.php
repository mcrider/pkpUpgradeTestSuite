<?php

/**
 * JournalStatisticsDAO.inc.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package journal
 *
 * Class for Journal Statistics DAO.
 * Operations for retrieving journal statistics.
 *
 * $Id: JournalStatisticsDAO.inc.php,v 1.8 2006/01/10 19:09:43 alec Exp $
 */

define('REPORT_TYPE_JOURNAL',	0x00001);
define('REPORT_TYPE_EDITOR',	0x00002);
define('REPORT_TYPE_REVIEWER',	0x00003);
define('REPORT_TYPE_SECTION',	0x00004);

class JournalStatisticsDAO extends DAO {
	/**
	 * Constructor.
	 */
	function JournalDAO() {
		parent::DAO();
	}

	/**
	 * Get statistics about articles in the system.
	 * Returns a map of name => value pairs.
	 * @param $journalId int The journal to fetch statistics for
	 * @param $sectionId int The section to query stats for (optional)
	 * @param $dateStart date The submit date to search from; optional
	 * @param $dateEnd date The submit date to search to; optional
	 * @return array
	 */
	function getArticleStatistics($journalId, $sectionId = null, $dateStart = null, $dateEnd = null) {
		$result = &$this->retrieve(
			'SELECT a.article_id AS article_id, a.date_submitted AS date_submitted, pa.date_published AS date_published, pa.pub_id AS pub_id, d.decision FROM articles a LEFT JOIN published_articles pa ON (a.article_id = pa.article_id) LEFT JOIN edit_decisions d ON (d.article_id = a.article_id) WHERE a.journal_id = ?' .
			($sectionId !== null ? ' AND a.section_id = ?' : '') .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : '') .
			' ORDER BY a.article_id, d.date_decided DESC',
			($sectionId !== null ? array($journalId, $sectionId) : $journalId)
		);

		$returner = array(
			'numSubmissions' => 0,
			'numPublishedSubmissions' => 0,
			'submissionsAccept' => 0,
			'submissionsDecline' => 0,
			'submissionsRevise' => 0,
			'submissionsUndecided' => 0,
			'submissionsAcceptPercent' => 0,
			'submissionsDeclinePercent' => 0,
			'submissionsRevisePercent' => 0,
			'submissionsUndecidedPercent' => 0,
			'daysToPublication' => 0
		);

		// Track which articles we're including
		$articleIds = array();

		$totalTimeToPublication = 0;
		$timeToPublicationCount = 0;

		while (!$result->EOF) {
			$row = $result->GetRowAssoc(false);

			// For each article, pick the most recent editor
			// decision only and ignore the rest. Depends on sort
			// order. FIXME -- there must be a better way of doing
			// this that's database independent.
			if (!in_array($row['article_id'], $articleIds)) {
				$articleIds[] = $row['article_id'];
				$returner['numSubmissions']++;

				if (!empty($row['pub_id'])) {
					$returner['numPublishedSubmissions']++;
				}

				if (!empty($row['date_submitted']) && !empty($row['date_published'])) {
					$timeSubmitted = strtotime($this->datetimeFromDB($row['date_submitted']));
					$timePublished = strtotime($this->datetimeFromDB($row['date_published']));
					if ($timePublished > $timeSubmitted) {
						$totalTimeToPublication += ($timePublished - $timeSubmitted);
						$timeToPublicationCount++;
					}
				}

				import('submission.common.Action');
				switch ($row['decision']) {
					case SUBMISSION_EDITOR_DECISION_ACCEPT:
						$returner['submissionsAccept']++;
						break;
					case SUBMISSION_EDITOR_DECISION_PENDING_REVISIONS:
					case SUBMISSION_EDITOR_DECISION_RESUBMIT:
						$returner['submissionsRevise']++;
						break;
					case SUBMISSION_EDITOR_DECISION_DECLINE:
						$returner['submissionsDecline']++;
						break;
					default:
						// If an article is published
						// but no decision recorded,
						// assume it was accepted
						if (isset($row['pub_id'])) {
							$returner['submissionsAccept']++;
						} else {
							$returner['submissionsUndecided']++;
						}
						break;
				}
			}

			$result->moveNext();
		}

		$result->Close();
		unset($result);

		// Calculate percentages where necessary
		if ($returner['numSubmissions'] != 0) {
			$returner['submissionsAcceptPercent'] = round($returner['submissionsAccept'] * 100 / $returner['numSubmissions']);
			$returner['submissionsDeclinePercent'] = round($returner['submissionsDecline'] * 100 / $returner['numSubmissions']);
			$returner['submissionsRevisePercent'] = round($returner['submissionsRevise'] * 100 / $returner['numSubmissions']);
			$returner['submissionsUndecidedPercent'] = round($returner['submissionsUndecided'] * 100 / $returner['numSubmissions']);
		}

		if ($timeToPublicationCount != 0) {
			// Keep one sig fig
			$returner['daysToPublication'] = round($totalTimeToPublication / $timeToPublicationCount / 60 / 60 / 24);
		}

		return $returner;
	}
	
	/**
	 * Get statistics about users in the system.
	 * Returns a map of name => value pairs.
	 * @param $journalId int The journal to fetch statistics for
	 * @param $dateStart date optional
	 * @param $dateEnd date optional
	 * @return array
	 */
	function getUserStatistics($journalId, $dateStart = null, $dateEnd = null) {
		$roleDao =& DAORegistry::getDAO('RoleDAO');

		// Get count of total users for this journal
		$result = &$this->retrieve(
			'SELECT COUNT(DISTINCT r.user_id) FROM roles r, users u WHERE r.user_id = u.user_id AND r.journal_id = ?' .
			($dateStart !== null ? ' AND u.date_registered >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND u.date_registered <= ' . $this->datetimeToDB($dateEnd) : ''),
			$journalId
		);

		$returner = array(
			'totalUsersCount' => $result->fields[0]
		);

		$result->Close();
		unset($result);

		// Get user counts for each role.
		$result = &$this->retrieve(
			'SELECT r.role_id, COUNT(r.user_id) AS role_count FROM roles r WHERE r.journal_id = ? GROUP BY r.role_id',
			$journalId
		);

		while (!$result->EOF) {
			$row = $result->GetRowAssoc(false);
			$returner[$roleDao->getRolePath($row['role_id'])] = $row['role_count'];
			$result->moveNext();
		}

		$result->Close();
		unset($result);

		return $returner;
	}

	/**
	 * Get statistics about subscriptions.
	 * @param $journalId int The journal to fetch statistics for
	 * @param $dateStart date optional
	 * @param $dateEnd date optional
	 * @return array
	 */
	function getSubscriptionStatistics($journalId, $dateStart = null, $dateEnd = null) {
		$result = &$this->retrieve(
			'SELECT st.type_id, st.type_name, count(s.subscription_id) AS type_count FROM subscription_types st, subscriptions s WHERE st.journal_id = ? AND s.type_id = st.type_id' .
			($dateStart !== null ? ' AND s.date_start >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND s.date_start <= ' . $this->datetimeToDB($dateEnd) : '') .
			' GROUP BY st.type_id, st.type_name',
			$journalId
		);

		$returner = array();

		while (!$result->EOF) {
			$row = $result->getRowAssoc(false);
			$returner[$row['type_id']] = array(
				'name' => $row['type_name'],
				'count' => $row['type_count']
			);
			$result->moveNext();
		}
		$result->Close();
		unset($result);

		return $returner;
	}

	/**
	 * Get statistics about issues in the system.
	 * Returns a map of name => value pairs.
	 * @param $journalId int The journal to fetch statistics for
	 * @param $dateStart date The publish date to search from; optional
	 * @param $dateEnd date The publish date to search to; optional
	 * @return array
	 */
	function getIssueStatistics($journalId, $dateStart = null, $dateEnd = null) {
		$result = &$this->retrieve(
			'SELECT COUNT(*) AS count, published FROM issues  WHERE journal_id = ?' .
			($dateStart !== null ? ' AND date_published >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND date_published <= ' . $this->datetimeToDB($dateEnd) : '') .
			' GROUP BY published',
			$journalId
		);

		$returner = array(
			'numPublishedIssues' => 0,
			'numUnpublishedIssues' => 0
		);

		while (!$result->EOF) {
			$row = $result->GetRowAssoc(false);

			if ($row['published']) {
				$returner['numPublishedIssues'] = $row['count'];
			} else {
				$returner['numUnpublishedIssues'] = $row['count'];
			}
			$result->moveNext();
		}

		$result->Close();
		unset($result);

		$returner['numIssues'] = $returner['numPublishedIssues'] + $returner['numUnpublishedIssues'];

		return $returner;
	}

	/**
	 * Get statistics about reviewers in the system.
	 * Returns a map of name => value pairs.
	 * @param $journalId int The journal to fetch statistics for
	 * @param $dateStart date The publish date to search from; optional
	 * @param $dateEnd date The publish date to search to; optional
	 * @return array
	 */
	function getReviewerStatistics($journalId, $dateStart = null, $dateEnd = null) {
		$result = &$this->retrieve(
			'SELECT r.review_id AS review_id, u.date_registered AS date_registered, r.reviewer_id AS reviewer_id, r.quality AS quality, r.date_assigned AS date_assigned, r.date_completed AS date_completed FROM articles a, review_assignments r LEFT JOIN users u ON (u.user_id = r.reviewer_id) WHERE a.journal_id = ? AND r.article_id = a.article_id' .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : ''),
			$journalId
		);

		$returner = array(
			'reviewsCount' => 0,
			'reviewerScore' => 0,
			'daysPerReview' => 0,
			'reviewerAddedCount' => 0,
			'reviewerCount' => 0
		);

		$scoredReviewsCount = 0;
		$totalScore = 0;
		$completedReviewsCount = 0;
		$totalElapsedTime = 0;
		$reviewerList = array();

		while (!$result->EOF) {
			$row = $result->GetRowAssoc(false);
			$returner['reviewsCount']++;
			if (!empty($row['quality'])) {
				$scoredReviewsCount++;
				$totalScore += $row['quality'];
			}

			if (!empty($row['reviewer_id']) && !in_array($row['reviewer_id'], $reviewerList)) {
				$returner['reviewerCount']++;
				$dateRegistered = strtotime($this->datetimeFromDB($row['date_registered']));
				if (($dateRegistered >= $dateStart || $dateStart === null) && ($dateRegistered <= $dateEnd || $dateEnd == null)) {
					$returner['reviewerAddedCount']++;
				}
				array_push($reviewerList, $row['reviewer_id']);
			}

			if (!empty($row['date_assigned']) && !empty($row['date_completed'])) {
				$timeAssigned = strtotime($this->datetimeFromDB($row['date_assigned']));
				$timeCompleted = strtotime($this->datetimeFromDB($row['date_completed']));
				$completedReviewsCount++;
				$totalElapsedTime += ($timeCompleted - $timeAssigned);
			}
			$result->moveNext();
		}

		$result->Close();
		unset($result);

		if ($scoredReviewsCount > 0) {
			// To one decimal place
			$returner['reviewerScore'] = round($totalScore * 10 / $scoredReviewsCount) / 10;
		}
		if ($completedReviewsCount > 0) {
			$seconds = $totalElapsedTime / $completedReviewsCount;
			$returner['daysPerReview'] = $seconds / 60 / 60 / 24;
		}

		return $returner;
	}

	function &getCountryDistribution($journalId, $locale = null) {
		if ($locale == null) $locale = Locale::getLocale();
		$result = &$this->retrieve(
			'SELECT DISTINCT u.country AS country FROM users u, roles r WHERE r.journal_id = ? AND r.user_id = u.user_id',
			$journalId
		);

		$countries = array();
		$countryDao =& DAORegistry::getDAO('CountryDAO');
		while (!$result->EOF) {
			$row = $result->GetRowAssoc(false);
			array_push($countries, $countryDao->getCountry($row['country'], $locale));
			$result->moveNext();
		}

		$result->Close();
		unset($result);

		return $countries;
	}

	/**
	 * Generate a Journal Report between the given dates (optional)
	 * @param $journalId int The journal to report on
	 * @param $dateStart string The start date
	 * @param $dateEnd string The end date
	 */
	function &getJournalReport($journalId, $dateStart = null, $dateEnd = null) {
		$result = &$this->retrieve(
			'SELECT a.article_id AS article_id, a.title AS article_title, ' .
			'pa.pub_id AS pub_id, pa.date_published AS date_published, ' .
			's.title AS section_title, s.title_alt1 AS section_title_alt1, s.title_alt2 AS section_title_alt2, ' .
			'a.date_submitted AS date_submitted, a.status AS status ' .
			'FROM ' .
			'articles a ' .
			'LEFT JOIN sections s ON (s.section_id = a.section_id) ' .
			'LEFT JOIN published_articles pa ON (a.article_id = pa.article_id) ' .
			'WHERE a.journal_id = ? ' .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : '') .
			' ORDER BY a.date_submitted',
			$journalId
		);
		import('journal.JournalReportIterator');
		$report =& new JournalReportIterator($journalId, $result, $dateStart, $dateEnd, REPORT_TYPE_JOURNAL);
		return $report;
	}

	/**
	 * Generate a Section Report between the given dates (optional)
	 * @param $journalId int The journal to report on
	 * @param $dateStart string The start date
	 * @param $dateEnd string The end date
	 */
	function &getSectionReport($journalId, $dateStart = null, $dateEnd = null) {
		$result = &$this->retrieve(
			'SELECT a.article_id AS article_id, a.title AS article_title, ' .
			'pa.pub_id AS pub_id, pa.date_published AS date_published, ' .
			's.title AS section_title, s.title_alt1 AS section_title_alt1, s.title_alt2 AS section_title_alt2, ' .
			'a.date_submitted AS date_submitted, a.status AS status ' .
			'FROM ' .
			'articles a ' .
			'LEFT JOIN sections s ON (s.section_id = a.section_id) ' .
			'LEFT JOIN published_articles pa ON (a.article_id = pa.article_id) ' .
			'WHERE a.journal_id = ? ' .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : '') .
			' ORDER BY s.title, a.date_submitted',
			$journalId
		);
		import('journal.JournalReportIterator');
		$report =& new JournalReportIterator($journalId, $result, $dateStart, $dateEnd, REPORT_TYPE_SECTION);
		return $report;
	}

	/**
	 * Generate a Reviewer Report between the given dates (optional)
	 * @param $journalId int The journal to report on
	 * @param $dateStart string The start date
	 * @param $dateEnd string The end date
	 */
	function &getReviewerReport($journalId, $dateStart = null, $dateEnd = null) {
		$result = &$this->retrieve(
			'SELECT ra.reviewer_id, ra.quality, a.article_id AS article_id, a.title AS article_title, ' .
			'pa.pub_id AS pub_id, pa.date_published AS date_published, ' .
			's.title AS section_title, s.title_alt1 AS section_title_alt1, s.title_alt2 AS section_title_alt2, ' .
			'a.date_submitted AS date_submitted, a.status AS status ' .
			'FROM ' .
			'review_assignments ra, ' .
			'articles a ' .
			'LEFT JOIN sections s ON (s.section_id = a.section_id) ' .
			'LEFT JOIN published_articles pa ON (a.article_id = pa.article_id) ' .
			'WHERE a.journal_id = ? AND ra.article_id = a.article_id ' .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : '') .
			' ORDER BY ra.reviewer_id, a.date_submitted',
			$journalId
		);
		import('journal.JournalReportIterator');
		$report =& new JournalReportIterator($journalId, $result, $dateStart, $dateEnd, REPORT_TYPE_REVIEWER);
		return $report;
	}

	/**
	 * Generate an Editor Report between the given dates (optional)
	 * @param $journalId int The journal to report on
	 * @param $dateStart string The start date
	 * @param $dateEnd string The end date
	 */
	function &getEditorReport($journalId, $dateStart = null, $dateEnd = null) {
		$result = &$this->retrieve(
			'SELECT ee.editor_id, a.article_id AS article_id, a.title AS article_title, ' .
			'pa.pub_id AS pub_id, pa.date_published AS date_published, ' .
			's.title AS section_title, s.title_alt1 AS section_title_alt1, s.title_alt2 AS section_title_alt2, ' .
			'a.date_submitted AS date_submitted, a.status AS status ' .
			'FROM ' .
			'articles a ' .
			'LEFT JOIN edit_assignments ee ON (ee.article_id = a.article_id) ' .
			'LEFT JOIN sections s ON (s.section_id = a.section_id) ' .
			'LEFT JOIN published_articles pa ON (a.article_id = pa.article_id) ' .
			'WHERE a.journal_id = ? ' .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : '') .
			' ORDER BY ee.editor_id, a.date_submitted',
			$journalId
		);
		import('journal.JournalReportIterator');
		$report =& new JournalReportIterator($journalId, $result, $dateStart, $dateEnd, REPORT_TYPE_EDITOR);
		return $report;
	}

	/**
	 * Determine, within a given journal and date range (optional),
	 * the maximum number of authors that a single submission has.
	 * @param $journalId int
	 * @param $dateStart string
	 * @param $dateEnd string
	 */
	function getMaxAuthorCount($journalId, $dateStart, $dateEnd) {
		$result = &$this->retrieve(
			'SELECT COUNT(aa.author_id) ' .
			'FROM ' .
			'articles a, ' .
			'article_authors aa ' .
			'WHERE a.journal_id = ? ' .
			'AND aa.article_id = a.article_id ' .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : '') .
			' GROUP BY a.article_id',
			$journalId
		);

		$max = null;
		while (!$result->EOF) {
			if ($max === null || $max < $result->fields[0]) {
				$max = $result->fields[0];
			}
			$result->moveNext();
		}

		$result->Close();
		unset($result);

		return $max;
	}

	/**
	 * Determine, within a given journal and date range (optional),
	 * the maximum number of reviewers that a single submission has.
	 * @param $journalId int
	 * @param $dateStart string
	 * @param $dateEnd string
	 */
	function getMaxReviewerCount($journalId, $dateStart, $dateEnd) {
		$result = &$this->retrieve(
			'SELECT COUNT(r.review_id) ' .
			'FROM ' .
			'articles a, ' .
			'review_assignments r ' .
			'WHERE a.journal_id = ? ' .
			'AND r.article_id = a.article_id ' .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : '') .
			' GROUP BY r.article_id',
			$journalId
		);

		$max = null;
		while (!$result->EOF) {
			if ($max === null || $max < $result->fields[0]) {
				$max = $result->fields[0];
			}
			$result->moveNext();
		}

		$result->Close();
		unset($result);

		return $max;
	}

	/**
	 * Determine, within a given journal and date range (optional),
	 * the maximum number of editors that a single submission has.
	 * @param $journalId int
	 * @param $dateStart string
	 * @param $dateEnd string
	 */
	function getMaxEditorCount($journalId, $dateStart, $dateEnd) {
		$result = &$this->retrieve(
			'SELECT COUNT(e.editor_id) ' .
			'FROM ' .
			'articles a, ' .
			'edit_assignments e ' .
			'WHERE a.journal_id = ? ' .
			'AND e.article_id = a.article_id ' .
			($dateStart !== null ? ' AND a.date_submitted >= ' . $this->datetimeToDB($dateStart) : '') .
			($dateEnd !== null ? ' AND a.date_submitted <= ' . $this->datetimeToDB($dateEnd) : '') .
			' GROUP BY e.article_id',
			$journalId
		);

		$max = null;
		while (!$result->EOF) {
			if ($max === null || $max < $result->fields[0]) {
				$max = $result->fields[0];
			}
			$result->moveNext();
		}

		$result->Close();
		unset($result);

		return $max;
	}
}

?>
