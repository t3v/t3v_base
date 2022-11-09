<?php
declare(strict_types=1);

/**
 * The `tt_content` TCA override.
 */

use T3v\T3vCore\Utility\ContentObjectUtility;
use T3v\T3vCore\Utility\ExtensionUtility;
use T3v\T3vCore\Utility\IconUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility as ExtbaseExtensionUtility;

defined('TYPO3') or die();

// === Variables ===

$extensionKey = 't3v_base';
$extensionSignature = ExtensionUtility::getSignature($extensionKey);
$flexFormsFolder = ExtensionUtility::getFlexFormsFolder($extensionKey);

// === TCA ===

$lll = ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');

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

$contentObjects = [
    'Background' => [
        'label' => $lll . 'contentObjects.background.label',
        'flexForm' => $flexFormsFolder . '/ContentObjects/Background.xml',
        'iconIdentifier' => IconUtility::getIdentifier($extensionKey, 'background')
    ],

    'Copyright' => [
        'label' => $lll . 'contentObjects.copyright.label',
        'flexForm' => $flexFormsFolder . '/ContentObjects/Copyright.xml',
        'iconIdentifier' => IconUtility::getIdentifier($extensionKey, 'copyright')
    ],

    'Icon' => [
        'label' => $lll . 'contentObjects.icon.label',
        'flexForm' => $flexFormsFolder . '/ContentObjects/Icon.xml',
        'iconIdentifier' => IconUtility::getIdentifier($extensionKey, 'icon')
    ],

    'Label' => [
        'label' => $lll . 'contentObjects.label.label',
        'flexForm' => $flexFormsFolder . '/ContentObjects/Label.xml',
        'iconIdentifier' => IconUtility::getIdentifier($extensionKey, 'label')
    ],

    'Link' => [
        'label' => $lll . 'contentObjects.link.label',
        'flexForm' => $flexFormsFolder . '/ContentObjects/Link.xml',
        'iconIdentifier' => IconUtility::getIdentifier($extensionKey, 'link')
    ],

    'Logo' => [
        'label' => $lll . 'contentObjects.logo.label',
        'flexForm' => $flexFormsFolder . '/ContentObjects/Logo.xml',
        'iconIdentifier' => IconUtility::getIdentifier($extensionKey, 'logo')
    ],

    'Search bar' => [
        'label' => $lll . 'contentObjects.searchBar.label',
        'flexForm' => $flexFormsFolder . '/ContentObjects/SearchBar.xml',
        'iconIdentifier' => IconUtility::getIdentifier($extensionKey, 'search_bar')
    ],

    'Spacer' => [
        'label' => $lll . 'contentObjects.spacer.label',
        'flexForm' => $flexFormsFolder . '/ContentObjects/Spacer.xml',
        'iconIdentifier' => IconUtility::getIdentifier($extensionKey, 'spacer')
    ]
];

foreach ($contentObjects as $name => $contentObject) {
    $contentObjectSignature = ContentObjectUtility::getSignature($name);
    $contentObjectIdentifier = ContentObjectUtility::getIdentifier($extensionSignature, $contentObjectSignature);

    // Registers the content object:
    ExtbaseExtensionUtility::registerPlugin(
        $extensionKey,
        $contentObjectSignature,
        $contentObject['label'],
        $contentObject['iconIdentifier']
    );

    if (!empty($contentObject['flexForm'])) {
        // Activates the display of the `flexform` field and sets the FlexForm definition:
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentObjectIdentifier] = 'pi_flexform';
        ExtensionManagementUtility::addPiFlexFormValue($contentObjectIdentifier, $contentObject['flexForm']);
    }

    // Disables the display of `layout`, `pages`, `select_key` and `recursive` field:
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentObjectIdentifier] =
        'layout, pages, select_key, recursive';
}

// === T3v Generator ===
