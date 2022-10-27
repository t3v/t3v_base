<?php
declare(strict_types=1);

/**
 * The `tt_content` TCA override.
 */

use T3v\T3vCore\Utility\ContentObjectUtility;
use T3v\T3vCore\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility as ExtbaseExtensionUtility;

defined('TYPO3') or die();

// === Variables ===

$extensionKey = 't3v_base';
$extensionIdentifier = ExtensionUtility::getIdentifier($extensionKey);
$flexFormsFolder = ExtensionUtility::getFlexFormsFolder($extensionKey);
$lll = ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');

// === TCA ===

// Adds the `header_type` to the TCA columns:
ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'header_type' => [
            'label' => $lll . 'tt_content.columns.headerType.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        $lll . 'tt_content.columns.headerType.config.items.default.label',
                        ''
                    ],
                    [
                        $lll . 'tt_content.columns.headerType.config.items.div.label',
                        'div'
                    ],
                    [
                        $lll . 'tt_content.columns.headerType.config.items.span.label',
                        'span'
                    ]
                ],
                'default' => ''
            ],
            'exclude' => true
        ]
    ]
);

// Adds the `header_type` field after the `header_layout` field in the `headers` palette:
ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'header_type',
    'after:header_layout'
);

// === Content Objects ===

$lll = ExtensionUtility::getLocallang($extensionKey, 'locallang_ttc.xlf');

// --- Background Content Object ---

$contentObjectKey = 'Background';
$contentObjectLabel = $lll . 'contentObjects.background.label';
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectIdentifier, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectSignature, "$flexFormsFolder/ContentObjects/Background.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout, pages, select_key, recursive';

// --- Copyright Content Object ---

$contentObjectKey = 'Copyright';
$contentObjectLabel = $lll . 'contentObjects.copyright.label';
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectIdentifier, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectSignature, "$flexFormsFolder/ContentObjects/Copyright.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout, pages, select_key, recursive';

// --- Icon Content Object ---

$contentObjectKey = 'Icon';
$contentObjectLabel = $lll . 'contentObjects.icon.label';
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectIdentifier, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectSignature, "$flexFormsFolder/ContentObjects/Icon.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout, pages, select_key, recursive';

// --- Label Content Object ---

$contentObjectKey = 'Label';
$contentObjectLabel = $lll . 'contentObjects.label.label';
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectIdentifier, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectSignature, "$flexFormsFolder/ContentObjects/Label.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout, pages, select_key, recursive';

// --- Link Content Object ---

$contentObjectKey = 'Link';
$contentObjectLabel = $lll . 'contentObjects.link.label';
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectIdentifier, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectSignature, "$flexFormsFolder/ContentObjects/Link.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout, pages, select_key, recursive';

// --- Logo Content Object ---

$contentObjectKey = 'Logo';
$contentObjectLabel = $lll . 'contentObjects.logo.label';
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectIdentifier, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectSignature, "$flexFormsFolder/ContentObjects/Logo.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout, pages, select_key, recursive';

// --- Search Bar Content Object ---

$contentObjectKey = 'SearchBar';
$contentObjectLabel = $lll . 'contentObjects.searchBar.label';
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectIdentifier, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectSignature, "$flexFormsFolder/ContentObjects/SearchBar.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout, pages, select_key, recursive';

// --- Spacer Content Object ---

$contentObjectKey = 'Spacer';
$contentObjectLabel = $lll . 'contentObjects.spacer.label';
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectIdentifier, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectSignature, "$flexFormsFolder/ContentObjects/Spacer.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout, pages, select_key, recursive';

// === T3v Generator ===
