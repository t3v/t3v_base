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
$extensionSignature = ExtensionUtility::getSignature($extensionKey);
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

// === Content objects ===

$lll = ExtensionUtility::getLocallang($extensionKey, 'locallang_ttc.xlf');

// --- Background ---

$contentObjectName = 'Background';
$contentObjectSignature = ContentObjectUtility::getSignature($contentObjectName);
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);
$contentObjectLabel = $lll . 'contentObjects.background.label';

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectSignature, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, "$flexFormsFolder/ContentObjects/Background.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] = 'layout, pages, select_key, recursive';

// --- Copyright ---

$contentObjectName = 'Copyright';
$contentObjectSignature = ContentObjectUtility::getSignature($contentObjectName);
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);
$contentObjectLabel = $lll . 'contentObjects.copyright.label';

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectSignature, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, "$flexFormsFolder/ContentObjects/Copyright.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] = 'layout, pages, select_key, recursive';

// --- Icon ---

$contentObjectName = 'Icon';
$contentObjectSignature = ContentObjectUtility::getSignature($contentObjectName);
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);
$contentObjectLabel = $lll . 'contentObjects.icon.label';

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectSignature, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, "$flexFormsFolder/ContentObjects/Icon.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] = 'layout, pages, select_key, recursive';

// --- Label ---

$contentObjectName = 'Label';
$contentObjectSignature = ContentObjectUtility::getSignature($contentObjectName);
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);
$contentObjectLabel = $lll . 'contentObjects.label.label';

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectSignature, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, "$flexFormsFolder/ContentObjects/Label.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] = 'layout, pages, select_key, recursive';

// --- Link ---

$contentObjectName = 'Link';
$contentObjectSignature = ContentObjectUtility::getSignature($contentObjectName);
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);
$contentObjectLabel = $lll . 'contentObjects.link.label';

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectSignature, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, "$flexFormsFolder/ContentObjects/Link.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] = 'layout, pages, select_key, recursive';

// --- Logo ---

$contentObjectName = 'Logo';
$contentObjectSignature = ContentObjectUtility::getSignature($contentObjectName);
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);
$contentObjectLabel = $lll . 'contentObjects.logo.label';

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectSignature, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, "$flexFormsFolder/ContentObjects/Logo.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] = 'layout, pages, select_key, recursive';

// --- Search bar ---

$contentObjectName = 'SearchBar';
$contentObjectSignature = ContentObjectUtility::getSignature($contentObjectName);
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);
$contentObjectLabel = $lll . 'contentObjects.searchBar.label';

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectSignature, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, "$flexFormsFolder/ContentObjects/SearchBar.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] = 'layout, pages, select_key, recursive';

// --- Spacer ---

$contentObjectName = 'Spacer';
$contentObjectSignature = ContentObjectUtility::getSignature($contentObjectName);
$contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);
$contentObjectLabel = $lll . 'contentObjects.spacer.label';

// Registers the content object:
ExtbaseExtensionUtility::registerPlugin($extensionKey, $contentObjectSignature, $contentObjectLabel);

// Activates the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, "$flexFormsFolder/ContentObjects/Spacer.xml");

// Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] = 'layout, pages, select_key, recursive';

// === T3v Generator ===
