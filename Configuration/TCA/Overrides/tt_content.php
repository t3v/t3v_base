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
$extensionIdentifier = \T3v\T3vCore\Utility\ExtensionUtility::identifier($extensionKey);
$extensionSignature = \T3v\T3vCore\Utility\ExtensionUtility::signature($namespace, $extensionKey);
$flexFormsFolder = \T3v\T3vCore\Utility\ExtensionUtility::flexFormsFolder($extensionKey);
$lll = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_ttc.xlf');

// === Content Objects ===

// --- Background Content Object ---

$contentObjectKey = 'Background';
$contentObjectLabel = $lll . 'contentObjects.background.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::identifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::signature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/Background.xml"
);

// --- Copyright Content Object ---

$contentObjectKey = 'Copyright';
$contentObjectLabel = $lll . 'contentObjects.copyright.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::identifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::signature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/Copyright.xml"
);

// --- Icon Content Object ---

$contentObjectKey = 'Icon';
$contentObjectLabel = $lll . 'contentObjects.icon.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::identifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::signature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/Icon.xml"
);

// --- Label Content Object ---

$contentObjectKey = 'Label';
$contentObjectLabel = $lll . 'contentObjects.label.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::identifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::signature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/Label.xml"
);

// --- Link Content Object ---

$contentObjectKey = 'Link';
$contentObjectLabel = $lll . 'contentObjects.link.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::identifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::signature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/Link.xml"
);

// --- Logo Content Object ---

$contentObjectKey = 'Logo';
$contentObjectLabel = $lll . 'contentObjects.logo.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::identifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::signature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/Logo.xml"
);

// --- Spacer Content Object ---

$contentObjectKey = 'Spacer';
$contentObjectLabel = $lll . 'contentObjects.spacer.label';
$contentObjectIdentifier = \T3v\T3vCore\Utility\ContentObjectUtility::identifier($contentObjectKey);
$contentObjectSignature = \T3v\T3vCore\Utility\ContentObjectUtility::signature($extensionIdentifier, $contentObjectIdentifier);

// Register the Content Object
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentObjectIdentifier, $contentObjectLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentObjectSignature,
    "{$flexFormsFolder}/ContentObjects/Spacer.xml"
);

// === Palettes ===

// Add `subheader` field after `header_link` field in the `header` palette
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'header',
    '--linebreak--,subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel',
    'after:header_link'
);

/** _XXX_T3V_CREATOR_XXX_ **/
