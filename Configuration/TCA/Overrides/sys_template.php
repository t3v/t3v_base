<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey   = 't3v_base';
$extensionTitle = 'T3v Base';

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', $extensionTitle);
