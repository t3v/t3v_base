<?php
/**
 * The `tt_content` TCA override.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$namespace = 'T3v';
$extensionKey = 't3v_base';
$extensionIdentifier = \T3v\T3vCore\Utility\ExtensionUtility::getIdentifier($extensionKey);
$extensionSignature = \T3v\T3vCore\Utility\ExtensionUtility::getSignature($namespace, $extensionKey);
$flexFormsFolder = \T3v\T3vCore\Utility\ExtensionUtility::getFlexFormsFolder($extensionKey);
$lll = \T3v\T3vCore\Utility\ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');

// === TCA ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'header_type' => [
            'label' => $lll . 'tt_content.headerType',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        $lll . 'tt_content.headerType.standard',
                        ''
                    ],
                    [
                        $lll . 'tt_content.headerType.div',
                        'div'
                    ],
                    [
                        $lll . 'tt_content.headerType.span',
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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'header_type',
    'after:header_layout'
);

// Removes the `subheader` field temporally:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--palette--;;empty', '', 'replace:subheader');

// Adds the `subheader` field back before the `header_link` field in the `headers` palette:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    '--linebreak--,subheader,--linebreak--',
    'before:header_link'
);

// === Content Objects ===

$lll = \T3v\T3vCore\Utility\ExtensionUtility::getLocallang($extensionKey, 'locallang_ttc.xlf');

// --- Background Content Object ---

$contentObjectKey = 'Background';
$contentObjectLabel = $lll . 'contentObjects.background.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object:
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Activate the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/{$contentObjectKey}.xml"
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// --- Copyright Content Object ---

$contentObjectKey = 'Copyright';
$contentObjectLabel = $lll . 'contentObjects.copyright.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object:
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Activate the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/{$contentObjectKey}.xml"
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// --- Icon Content Object ---

$contentObjectKey = 'Icon';
$contentObjectLabel = $lll . 'contentObjects.icon.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object:
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Activate the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/{$contentObjectKey}.xml"
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// --- Label Content Object ---

$contentObjectKey = 'Label';
$contentObjectLabel = $lll . 'contentObjects.label.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object:
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Activate the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/{$contentObjectKey}.xml"
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// --- Link Content Object ---

$contentObjectKey = 'Link';
$contentObjectLabel = $lll . 'contentObjects.link.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object:
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Activate the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/{$contentObjectKey}.xml"
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// --- Logo Content Object ---

$contentObjectKey = 'Logo';
$contentObjectLabel = $lll . 'contentObjects.logo.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object:
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Activate the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/{$contentObjectKey}.xml"
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// --- Search Bar Content Object ---

$contentObjectKey = 'SearchBar';
$contentObjectLabel = $lll . 'contentObjects.searchBar.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object:
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Activate the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/{$contentObjectKey}.xml"
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// --- Spacer Content Object ---

$contentObjectKey = 'Spacer';
$contentObjectLabel = $lll . 'contentObjects.spacer.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::getIdentifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::getSignature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object:
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Activate the display of the `flexform` field and set the FlexForm definition:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/{$contentObjectKey}.xml"
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field:
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// === T3v Generator ===
