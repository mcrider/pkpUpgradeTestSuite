<?php

/**
 * ArticleFileManager.inc.php
 *
 * Copyright (c) 2003-2005 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package file
 *
 * Class defining operations for article file management.
 *
 * Article directory structure:
 * [article id]/note
 * [article id]/public
 * [article id]/submission
 * [article id]/submission/original
 * [article id]/submission/review
 * [article id]/submission/editor
 * [article id]/submission/copyedit
 * [article id]/submission/layout
 * [article id]/supp
 *
 * $Id: ArticleFileManager.inc.php,v 1.28 2005/04/30 03:49:51 kevin Exp $
 */

import('file.FileManager');

/* File type suffixes */
define('ARTICLE_FILE_SUBMISSION',	'SM');
define('ARTICLE_FILE_REVIEW',		'RV');
define('ARTICLE_FILE_EDITOR',		'ED');
define('ARTICLE_FILE_COPYEDIT',		'CE');
define('ARTICLE_FILE_LAYOUT',		'LE');
define('ARTICLE_FILE_PUBLIC',		'PB');
define('ARTICLE_FILE_SUPP',		'SP');
define('ARTICLE_FILE_NOTE',		'NT');

class ArticleFileManager extends FileManager {
	
	/** @var string the path to location of the files */
	var $filesDir;
	
	/** @var int the ID of the associated article */
	var $articleId;
	
	/** @var Article the associated article */
	var $article;
	
	/**
	 * Constructor.
	 * Create a manager for handling article file uploads.
	 * @param $articleId int
	 */
	function ArticleFileManager($articleId) {
		$this->articleId = $articleId;
		$articleDao = &DAORegistry::getDAO('ArticleDAO');
		$this->article = &$articleDao->getArticle($articleId);
		$journalId = $this->article->getJournalId();
		$this->filesDir = Config::getVar('files', 'files_dir') . '/journals/' . $journalId .
		'/articles/' . $articleId . '/';
	}
	
	/**
	 * Upload a submission file.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileId int
	 * @return int file ID, is false if failure
	 */
	function uploadSubmissionFile($fileName, $fileId = null, $overwrite = false) {
		return $this->handleUpload($fileName, ARTICLE_FILE_SUBMISSION, $fileId, $overwrite);
	}
	
	/**
	 * Upload a file to the review file folder.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileId int
	 * @return int file ID, is false if failure
	 */
	function uploadReviewFile($fileName, $fileId = null) {
		return $this->handleUpload($fileName, ARTICLE_FILE_REVIEW, $fileId);
	}

	/**
	 * Upload a file to the editor decision file folder.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileId int
	 * @return int file ID, is false if failure
	 */
	function uploadEditorDecisionFile($fileName, $fileId = null) {
		return $this->handleUpload($fileName, ARTICLE_FILE_EDITOR, $fileId);
	}

	/**
	 * Upload a file to the copyedit file folder.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileId int
	 * @return int file ID, is false if failure
	 */
	function uploadCopyeditFile($fileName, $fileId = null) {
		return $this->handleUpload($fileName, ARTICLE_FILE_COPYEDIT, $fileId);
	}

	/**
	 * Upload a section editor's layout editing file.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileId int
	 * @param $overwrite boolean
	 * @return int file ID, is null if failure
	 */
	function uploadLayoutFile($fileName, $fileId = null, $overwrite = true) {
		return $this->handleUpload($fileName, ARTICLE_FILE_LAYOUT, $fileId, $overwrite);
	}	

	/**
	 * Upload a supp file.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileId int
	 * @param $overwrite boolean
	 * @return int file ID, is false if failure
	 */
	function uploadSuppFile($fileName, $fileId = null, $overwrite = true) {
		return $this->handleUpload($fileName, ARTICLE_FILE_SUPP, $fileId, $overwrite);
	}	
	
	/**
	 * Upload a public file.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileId int
	 * @param $overwrite boolean
	 * @return int file ID, is false if failure
	 */
	function uploadPublicFile($fileName, $fileId = null, $overwrite = true) {
		return $this->handleUpload($fileName, ARTICLE_FILE_PUBLIC, $fileId, $overwrite);
	}	
	
	/**
	 * Upload a note file.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileId int
	 * @param $overwrite boolean
	 * @return int file ID, is false if failure
	 */
	function uploadSubmissionNoteFile($fileName, $fileId = null, $overwrite = true) {
		return $this->handleUpload($fileName, ARTICLE_FILE_NOTE, $fileId, $overwrite);
	}
	
	/**
	 * Retrieve file information by file ID.
	 * @return ArticleFile
	 */
	function &getFile($fileId, $revision = null) {
		$articleFileDao = &DAORegistry::getDAO('ArticleFileDAO');
		$articleFile = &$articleFileDao->getArticleFile($fileId, $revision, $this->articleId);
		return $articleFile;
	}
	
	/**
	 * Read a file's contents.
	 * @param $output boolean output the file's contents instead of returning a string
	 * @return boolean
	 */
	function readFile($fileId, $revision = null, $output = false) {
		$articleFile = &$this->getFile($fileId, $revision);
		
		if (isset($articleFile)) {
			$fileType = $articleFile->getFileType();
			$filePath = $this->filesDir . $articleFile->getType() . '/' . $articleFile->getFileName();
	
			return parent::readFile($filePath, $output);
			
		} else {
			return false;
		}
	}
	
	/**
	 * Delete a file by ID.
	 * If no revision is specified, all revisions of the file are deleted.
	 * @param $fileId int
	 * @param $revision int (optional)
	 * @return int number of files removed
	 */
	function deleteFile($fileId, $revision = null) {
		$articleFileDao = &DAORegistry::getDAO('ArticleFileDAO');
		
		$files = array();
		if (isset($revision)) {
			$file = &$articleFileDao->getArticleFile($fileId, $revision);
			if (isset($file)) {
				$files[] = $file;
			}
			
		} else {
			$files =  &$articleFileDao->getArticleFileRevisions($fileId);
		}
		
		foreach ($files as $f) {
			parent::deleteFile($this->filesDir . $f->getType() . '/' . $f->getFileName());
		}
		
		$articleFileDao->deleteArticleFileById($fileId, $revision);
		
		return count($files);
	}

	/**
	 * Delete the entire tree of files belonging to an article.
	 */
	function deleteArticleTree() {
		parent::rmtree($this->filesDir);
	}

	/**
	 * Download a file.
	 * @param $fileId int the file id of the file to download
	 * @param $revision int the revision of the file to download
	 * @param $inline print file as inline instead of attachment, optional
	 * @return boolean
	 */
	function downloadFile($fileId, $revision = null, $inline = false) {
		$articleFile = &$this->getFile($fileId, $revision);
		if (isset($articleFile)) {
			$fileType = $articleFile->getFileType();
			$filePath = $this->filesDir . $articleFile->getType() . '/' . $articleFile->getFileName();
	
			return parent::downloadFile($filePath, $fileType, $inline);
			
		} else {
			return false;
		}
	}
	
	/**
	 * View a file inline (variant of downloadFile).
	 * @see ArticleFileManager::downloadFile
	 */
	function viewFile($fileId, $revision = null) {
		$this->downloadFile($fileId, $revision, true);
	}
	
	/**
	 * Copies an existing file to create a review file.
	 * @param $originalFileId int the file id of the original file.
	 * @param $originalRevision int the revision of the original file.
	 * @param $destFileId int the file id of the current review file
	 * @return int the file id of the new file.
	 */
	function copyToReviewFile($fileId, $revision = null, $destFileId = null) {
		return $this->copyAndRenameFile($fileId, $revision, ARTICLE_FILE_REVIEW, $destFileId);
	}
	
	/**
	 * Copies an existing file to create an editor decision file.
	 * @param $fileId int the file id of the review file.
	 * @param $revision int the revision of the review file.
	 * @param $destFileId int file ID to copy to
	 * @return int the file id of the new file.
	 */
	function copyToEditorFile($fileId, $revision = null, $destFileId = null) {
		return $this->copyAndRenameFile($fileId, $revision, ARTICLE_FILE_EDITOR, $destFileId);
	}
	
	/**
	* Copies an existing file to create a copyedit file.
	* @param $fileId int the file id of the editor file.
	* @param $revision int the revision of the editor file.
	* @return int the file id of the new file.
	*/
	function copyToCopyeditFile($fileId, $revision = null) {
		return $this->copyAndRenameFile($fileId, $revision, ARTICLE_FILE_COPYEDIT);
	}
	
	/**
	 * Copies an existing file to create a layout file.
	 * @param $fileId int the file id of the copyedit file.
	 * @param $revision int the revision of the copyedit file.
	 * @return int the file id of the new file.
	 */
	function copyToLayoutFile($fileId, $revision = null) {
		return $this->copyAndRenameFile($fileId, $revision, ARTICLE_FILE_LAYOUT);
	}
	
	/**
	 * Return type path associated with a type code.
	 * @param $type string
	 * @return string
	 */
	function typetoPath($type) {
		switch ($type) {
			case ARTICLE_FILE_PUBLIC: return 'public';
			case ARTICLE_FILE_SUPP: return 'supp';
			case ARTICLE_FILE_NOTE: return 'note';
			case ARTICLE_FILE_REVIEW: return 'submission/review';
			case ARTICLE_FILE_EDITOR: return 'submission/editor';
			case ARTICLE_FILE_COPYEDIT: return 'submission/copyedit';
			case ARTICLE_FILE_LAYOUT: return 'submission/layout';
			case ARTICLE_FILE_SUBMISSION: default: return 'submission/original';
		}
	}
	
	/**
	 * Parse the file extension from a filename/path.
	 * @param $fileName string
	 * @return string
	 */
	function parseFileExtension($fileName) {
		$fileParts = explode('.', $fileName);
		if (is_array($fileParts)) {
			$fileExtension = $fileParts[count($fileParts) - 1];
		}
		
		// FIXME Check for evil
		if (!isset($fileExtension) || strstr($fileExtension, 'php') || strlen($fileExtension) > 6 || !preg_match('/^\w+$/', $fileExtension)) {
			$fileExtension = 'txt';
		}
		
		return $fileExtension;
	}
	
	/**
	 * Copies an existing ArticleFile and renames it.
	 * @param $sourceFileId int
	 * @param $sourceRevision int
	 * @param $destType string
	 * @param $destFileId int (optional)
	 */
	function copyAndRenameFile($sourceFileId, $sourceRevision, $destType, $destFileId = null) {
		$articleFileDao = &DAORegistry::getDAO('ArticleFileDAO');
		$articleFile = &new ArticleFile();
		
		$destTypePath = $this->typeToPath($destType);
		$destDir = $this->filesDir . $destTypePath . '/';
		
		if ($destFileId != null) {
			$currentRevision = $articleFileDao->getRevisionNumber($destFileId);
			$revision = $currentRevision + 1;
		} else {
			$revision = 1;
		}	
		
		$sourceArticleFile = $articleFileDao->getArticleFile($sourceFileId, $sourceRevision, $this->articleId);

		if (!isset($sourceArticleFile)) {
			return false;
		}
		
		$sourceDir = $this->filesDir . $sourceArticleFile->getType() . '/';
		
		if ($destFileId != null) {
			$articleFile->setFileId($destFileId);
		}
		$articleFile->setArticleId($this->articleId);
		$articleFile->setFileName($sourceArticleFile->getFileName());
		$articleFile->setFileType($sourceArticleFile->getFileType());
		$articleFile->setFileSize($sourceArticleFile->getFileSize());
		$articleFile->setOriginalFileName($sourceArticleFile->getFileName());
		$articleFile->setType($destTypePath);
		$articleFile->setStatus($sourceArticleFile->getStatus());
		$articleFile->setDateUploaded(Core::getCurrentDate());
		$articleFile->setDateModified(Core::getCurrentDate());
		$articleFile->setRound($this->article->getCurrentRound()); // FIXME This field is only applicable for review files?
		$articleFile->setRevision($revision);
		
		$fileId = $articleFileDao->insertArticleFile($articleFile);
		
		// Rename the file.
		$fileExtension = $this->parseFileExtension($sourceArticleFile->getFileName());
		$newFileName = $this->articleId.'-'.$fileId.'-'.$revision.'-'.$destType.'.'.$fileExtension;
		
		if (!$this->fileExists($destDir, 'dir')) {
			// Try to create destination directory
			$this->mkdirtree($destDir);
		}
		
		copy($sourceDir.$sourceArticleFile->getFileName(), $destDir.$newFileName);
		
		$articleFile->setFileName($newFileName);
		$articleFileDao->updateArticleFile($articleFile);
		
		return $fileId;
	}
	
	/**
	 * PRIVATE routine to upload the file and add it to the database.
	 * @param $fileName string index into the $_FILES array
	 * @param $dir string directory to put the file into
	 * @param $type string identifying type
	 * @param $fileId int ID of an existing file to update
	 * @param $overwrite boolean overwrite all previous revisions of the file (revision number is still incremented)
	 * @return int the file ID (false if upload failed)
	 */
	function handleUpload($fileName, $type, $fileId = null, $overwrite = false) {
		$articleFileDao = &DAORegistry::getDAO('ArticleFileDAO');
		$articleFile = &new ArticleFile();
		
		$typePath = $this->typeToPath($type);
		$dir = $this->filesDir . $typePath . '/';
		
		if (!$fileId) {
			// Insert dummy file to generate file id FIXME?
			$dummyFile = true;
			$revision = 1;
			$articleFile->setArticleId($this->articleId);
			$articleFile->setFileName('temp');
			$articleFile->setOriginalFileName('temp');
			$articleFile->setFileType('temp');
			$articleFile->setFileSize(0);
			$articleFile->setType('temp');
			$articleFile->setStatus('temp');
			$articleFile->setDateUploaded(Core::getCurrentDate());
			$articleFile->setDateModified(Core::getCurrentDate());
			$articleFile->setRound($this->article->getCurrentRound()); // FIXME This is review-specific and should NOT be here
			$articleFile->setRevision($revision);
			
			$fileId = $articleFileDao->insertArticleFile($articleFile);
		} else {
			$dummyFile = false;
			$currentRevision = $articleFileDao->getRevisionNumber($fileId);
			$revision = $currentRevision + 1;
		}
		
		// Get the file extension, then rename the file.
		$fileExtension = $this->parseFileExtension($this->getUploadedFileName($fileName));			
		$newFileName = $this->articleId.'-'.$fileId.'-'.$revision.'-'.$type.'.'.$fileExtension;
	
		if ($this->uploadFile($fileName, $dir.$newFileName)) {
			$articleFile->setFileId($fileId);
			$articleFile->setArticleId($this->articleId);
			$articleFile->setFileName($newFileName);
			$articleFile->setFileType($_FILES[$fileName]['type']);
			$articleFile->setFileSize($_FILES[$fileName]['size']);
			$articleFile->setOriginalFileName($_FILES[$fileName]['name']);
			$articleFile->setType($typePath);
			$articleFile->setStatus(''); // FIXME wtf is this for?
			$articleFile->setDateUploaded(Core::getCurrentDate());
			$articleFile->setDateModified(Core::getCurrentDate());
			$articleFile->setRound($this->article->getCurrentRound());
			$articleFile->setRevision($revision);
		
			if ($dummyFile) {
				$articleFileDao->updateArticleFile($articleFile);
			} else {
				$articleFileDao->insertArticleFile($articleFile);
			}
			
			if ($overwrite) {
				// Remove all previous revisions
				$revisions = $articleFileDao->getArticleFileRevisions($fileId);
				foreach ($revisions as $revisionFile) {
					if ($revisionFile->getRevision() != $revision) {
						$this->deleteFile($fileId, $revisionFile->getRevision());
					}
				}
			}
			
			return $fileId;
			
		} else {
		
			// Delete the dummy file we inserted
			$articleFileDao->deleteArticleFileById($fileId);
			
			return false;
		}
	}
}

?>
