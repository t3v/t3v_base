<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace           = 'T3v';
$extensionKey        = $_EXTKEY;
$extensionSignature  = \T3v\T3vCore\Utility\ExtensionUtility::extensionSignature($namespace, $extensionKey);
$configurationFolder = \T3v\T3vCore\Utility\ExtensionUtility::configurationFolder($extensionKey);
$resourcesFolder     = \T3v\T3vCore\Utility\ExtensionUtility::resourcesFolder($extensionKey);