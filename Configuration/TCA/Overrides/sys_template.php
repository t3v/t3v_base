<?php
/**
 * The `sys_template` TCA override.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3') or die();

// === Variables ===

$extensionKey = 't3v_base';
$extensionTitle = 'T3v Base';

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', $extensionTitle);

// === T3v Generator ===
