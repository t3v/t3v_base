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

// === Additional TCA columns ===

$lll = \T3v\T3vCore\Utility\ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');

$additionalTCAcolumns = [
    'label' => [
        'label' => $lll . 'tt_content.label',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
            'size' => 50,
            'max' => 255
        ],
        'l10n_mode' => 'prefixLangTitle',
        'exclude' => true
    ],

    'header_type' => [
        'label' => $lll . 'tt_content.headerType',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    $lll . 'tt_content.headerType.default',
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
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $additionalTCAcolumns
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'general',
    'label, --linebreak--',
    'before:CType'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'general',
    'header_type',
    'after:header_position'
);

$GLOBALS['TCA']['tt_content']['ctrl']['label'] = 'header';
$GLOBALS['TCA']['tt_content']['ctrl']['label_userFunc'] = \T3v\T3vBase\Backend\UserFunctions::class . '->processLabel';

unset($additionalTCAcolumns);

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

// === Palettes ===

// Add `subheader` field after `header_link` field in the `header` palette:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'header',
    '--linebreak--,subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel',
    'after:header_link'
);

/** _XXX_T3V_GENERATOR_XXX_ **/
