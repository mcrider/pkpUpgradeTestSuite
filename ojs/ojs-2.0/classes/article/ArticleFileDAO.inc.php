<?php

/**
 * ArticleFileDAO.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package article
 *
 * Class for ArticleFile DAO.
 * Operations for retrieving and modifying ArticleFile objects.
 *
 * $Id: ArticleFileDAO.inc.php,v 1.19 2005/05/09 01:18:43 kevin Exp $
 */

import('article.ArticleFile');

class ArticleFileDAO extends DAO {


	/**
	 * Constructor.
	 */
	function ArticleFileDAO() {
		parent::DAO();
	}
	
	/**
	 * Retrieve an article by ID.
	 * @param $fileId int
	 * @param $revision int optional, if omitted latest revision is used
	 * @param $articleId int optional
	 * @return ArticleFile
	 */
	function &getArticleFile($fileId, $revision = null, $articleId = null) {
		if ($revision == null) {
			if ($articleId != null) {
				$result = &$this->retrieveLimit(
					'SELECT a.* FROM article_files a WHERE file_id = ? AND article_id = ? ORDER BY revision DESC',
					array($fileId, $articleId),
					1
				);
			} else {
				$result = &$this->retrieveLimit(
					'SELECT a.* FROM article_files a WHERE file_id = ? ORDER BY revision DESC',
					$fileId,
					1
				);
			}
			
		} else {
			if ($articleId != null) {
				$result = &$this->retrieve(
					'SELECT a.* FROM article_files a WHERE file_id = ? AND revision = ? AND article_id = ?',
					array($fileId, $revision, $articleId)
				);
			} else {
				$result = &$this->retrieve(
					'SELECT a.* FROM article_files a WHERE file_id = ? AND revision = ?',
					array($fileId, $revision)
				);
			}
		}

		if (!isset($result) || $result->RecordCount() == 0) {
			return null;
		} else {
			return $this->_returnArticleFileFromRow($result->GetRowAssoc(false));
		}
	}
	
	/**
	 * Retrieve all revisions of an article file.
	 * @param $articleId int
	 * @return ArticleFile
	 */
	function &getArticleFileRevisions($fileId, $round = null) {
		$articleFiles = array();
		
		// FIXME If "round" is review-specific, it shouldn't be in this table
		if ($round == null) {
			$result = &$this->retrieve(
				'SELECT a.* FROM article_files a WHERE file_id = ? ORDER BY revision',
				$fileId
			);
		} else {
			$result = &$this->retrieve(
				'SELECT a.* FROM article_files a WHERE file_id = ? AND round = ? ORDER BY revision',
				array($fileId, $round)
			);
		}
		
		while (!$result->EOF) {
			$articleFiles[] = &$this->_returnArticleFileFromRow($result->GetRowAssoc(false));
			$result->moveNext();
		}
		$result->Close();
	
		return $articleFiles;
	}
	
	/**
	 * Retrieve revisions of an article file in a range.
	 * @param $articleId int
	 * @return ArticleFile
	 */
	function &getArticleFileRevisionsInRange($fileId, $start = 1, $end = null) {
		$articleFiles = array();
		
		if ($end == null) {
			$result = &$this->retrieve(
				'SELECT a.* FROM article_files a WHERE file_id = ? AND revision >= ?',
				array($fileId, $start)
			);
		} else {
			$result = &$this->retrieve(
				'SELECT a.* FROM article_files a WHERE file_id = ? AND revision >= ? AND revision <= ?',
				array($fileId, $start, $end)
			);		
		}
				
		while (!$result->EOF) {
			$articleFiles[] = &$this->_returnArticleFileFromRow($result->GetRowAssoc(false));
			$result->moveNext();
		}
		$result->Close();
	
		return $articleFiles;
	}
	
	/**
	 * Retrieve the current revision number for a file.
	 * @param $fileId int
	 * @return int
	 */
	function &getRevisionNumber($fileId) {
		$result = &$this->retrieve(
			'SELECT MAX(revision) AS max_revision FROM article_files a WHERE file_id = ?',
			$fileId
		);
		
		if ($result->RecordCount() == 0) {
			return null;
		} else {
			$row = $result->FetchRow();
			return $row['max_revision'];
		}
	}
	
	/**
	 * Retrieve all article files for an article.
	 * @param $articleId int
	 * @return array ArticleFiles
	 */
	function &getArticleFilesByArticle($articleId) {
		$articleFiles = array();
		
		$result = &$this->retrieve(
			'SELECT * FROM article_files WHERE article_id = ?',
			$articleId
		);
		
		while (!$result->EOF) {
			$articleFiles[] = &$this->_returnArticleFileFromRow($result->GetRowAssoc(false));
			$result->moveNext();
		}
		$result->Close();
	
		return $articleFiles;
	}
	
	/**
	 * Internal function to return an ArticleFile object from a row.
	 * @param $row array
	 * @return ArticleFile
	 */
	function &_returnArticleFileFromRow(&$row) {
		$articleFile = &new ArticleFile();
		$articleFile->setFileId($row['file_id']);
		$articleFile->setRevision($row['revision']);
		$articleFile->setArticleId($row['article_id']);
		$articleFile->setFileName($row['file_name']);
		$articleFile->setFileType($row['file_type']);
		$articleFile->setFileSize($row['file_size']);
		$articleFile->setOriginalFileName($row['original_file_name']);
		$articleFile->setType($row['type']);
		$articleFile->setStatus($row['status']);
		$articleFile->setDateUploaded($row['date_uploaded']);
		$articleFile->setDateModified($row['date_modified']);
		$articleFile->setRound($row['round']);
		$articleFile->setViewable($row['viewable']);
		return $articleFile;
	}

	/**
	 * Insert a new ArticleFile.
	 * @param $articleFile ArticleFile
	 * @return int
	 */	
	function insertArticleFile(&$articleFile) {
		$fileId = $articleFile->getFileId();
		$params = array(
			$articleFile->getRevision() === null ? 1 : $articleFile->getRevision(),
			$articleFile->getArticleId(),
			$articleFile->getFileName(),
			$articleFile->getFileType(),
			$articleFile->getFileSize(),
			$articleFile->getOriginalFileName(),
			$articleFile->getType(),
			$articleFile->getStatus(),
			$articleFile->getDateUploaded(),
			$articleFile->getDateModified(),
			$articleFile->getRound(),
			$articleFile->getViewable()
		);
		
		if ($fileId) {
			array_unshift($params, $fileId);
		}
		
		$this->update(
			'INSERT INTO article_files
				(' . ($fileId ? 'file_id, ' : '') . 'revision, article_id, file_name, file_type, file_size, original_file_name, type, status, date_uploaded, date_modified, round, viewable)
				VALUES
				(' . ($fileId ? '?, ' : '') . '?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
			$params
		);
		
		if (!$fileId) {
			$articleFile->setFileId($this->getInsertArticleFileId());
		}
		
		return $articleFile->getFileId();
	}
	
	/**
	 * Update an existing article file.
	 * @param $article ArticleFile
	 */
	function updateArticleFile(&$articleFile) {
		$this->update(
			'UPDATE article_files
				SET
					article_id = ?,
					file_name = ?,
					file_type = ?,
					file_size = ?,
					original_file_name = ?,
					type = ?,
					status = ?,
					date_uploaded = ?,
					date_modified = ?,
					round = ?,
					viewable = ?
				WHERE file_id = ? AND revision = ?',
			array(
				$articleFile->getArticleId(),
				$articleFile->getFileName(),
				$articleFile->getFileType(),
				$articleFile->getFileSize(),
				$articleFile->getOriginalFileName(),
				$articleFile->getType(),
				$articleFile->getStatus(),
				$articleFile->getDateUploaded(),
				$articleFile->getDateModified(),
				$articleFile->getRound(),
				$articleFile->getViewable(),
				$articleFile->getFileId(),
				$articleFile->getRevision()
			)
		);
		
		return $articleFile->getFileId();
		
	}
	
	/**
	 * Delete an article file.
	 * @param $article ArticleFile
	 */
	function deleteArticleFile(&$articleFile) {
		return $this->deleteArticleFileById($articleFile->getFileId(), $articleFile->getRevision());
	}
	
	/**
	 * Delete an article file by ID.
	 * @param $articleId int
	 * @param $revision int
	 */
	function deleteArticleFileById($fileId, $revision = null) {
		if ($revision == null) {
			return $this->update(
				'DELETE FROM article_files WHERE file_id = ?', $fileId
			);
		} else {
			return $this->update(
				'DELETE FROM article_files WHERE file_id = ? AND revision = ?', array($fileId, $revision)
			);
		}
	}
	
	/**
	 * Delete all article files for an article.
	 * @param $articleId int
	 */
	function deleteArticleFiles($articleId) {
		return $this->update(
			'DELETE FROM article_files WHERE article_id = ?', $articleId
		);
	}

	/**
	 * Get the ID of the last inserted article file.
	 * @return int
	 */
	function getInsertArticleFileId() {
		return $this->getInsertId('article_files', 'file_id');
	}
	
}

?>
