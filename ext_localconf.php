<?php
/**
 * The local extension configuration.
 */

use T3v\T3vCore\Utility\ExtensionUtility;
use T3v\T3vCore\Utility\IconUtility;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility as ExtbaseExtensionUtility;

defined('TYPO3') or die();

(static function () {
    // === Variables ===

    $extensionKey = 't3v_base';
    $iconsFolder = ExtensionUtility::getIconsFolder($extensionKey);
    $tsConfigFolder = ExtensionUtility::getTSConfigFolder($extensionKey);

    // === TSconfig ===

    ExtensionManagementUtility::addPageTSConfig("<INCLUDE_TYPOSCRIPT: source=\"$tsConfigFolder/Page.tsconfig\">");

    if (ExtensionManagementUtility::isLoaded('container')) {
        ExtensionManagementUtility::addPageTSConfig(
            "<INCLUDE_TYPOSCRIPT: source=\"$tsConfigFolder/Page/ContainerElements.tsconfig\">"
        );
    }

    if (ExtensionManagementUtility::isLoaded('gridelements')) {
        ExtensionManagementUtility::addPageTSConfig(
            "<INCLUDE_TYPOSCRIPT: source=\"$tsConfigFolder/Page/GridElements.tsconfig\">"
        );
    }

    // === Content objects ===

    // --- Background ---

    ExtbaseExtensionUtility::configurePlugin(
        $extensionKey,

        // The unique name of the content object in upper camel case:
        'Background',

        // The array holding the controller-action-combinations that are accessible:
        [
            // The first controller and its first action will be the default
            'ContentObjects\Background' => 'index'
        ],

        // The array of non-cacheable controller-action-combinations (they must already be enabled):
        [
            // 'ContentObjects\Background' => 'index'
        ]
    );

    // --- Copyright ---

    ExtbaseExtensionUtility::configurePlugin(
        $extensionKey,

        // The unique name of the content object in upper camel case:
        'Copyright',

        // The array holding the controller-action-combinations that are accessible:
        [
            // The first controller and its first action will be the default
            'ContentObjects\Copyright' => 'index'
        ],

        // The array of non-cacheable controller-action-combinations (they must already be enabled):
        [
            // 'ContentObjects\Copyright' => 'index'
        ]
    );

    // --- Label ---

    ExtbaseExtensionUtility::configurePlugin(
        $extensionKey,

        // The unique name of the content object in upper camel case:
        'Label',

        // The array holding the controller-action-combinations that are accessible:
        [
            // The first controller and its first action will be the default
            'ContentObjects\Label' => 'index'
        ],

        // The array of non-cacheable controller-action-combinations (they must already be enabled):
        [
            // 'ContentObjects\Label' => 'index'
        ]
    );

    // --- Icon ---

    ExtbaseExtensionUtility::configurePlugin(
        $extensionKey,

        // The unique name of the content object in upper camel case:
        'Icon',

        // The array holding the controller-action-combinations that are accessible:
        [
            // The first controller and its first action will be the default
            'ContentObjects\Icon' => 'index'
        ],

        // The array of non-cacheable controller-action-combinations (they must already be enabled):
        [
            // 'ContentObjects\Icon' => 'index'
        ]
    );

    // --- Link ---

    ExtbaseExtensionUtility::configurePlugin(
        $extensionKey,

        // The unique name of the content object in upper camel case:
        'Link',

        // The array holding the controller-action-combinations that are accessible:
        [
            // The first controller and its first action will be the default
            'ContentObjects\Link' => 'index'
        ],

        // The array of non-cacheable controller-action-combinations (they must already be enabled):
        [
            // 'ContentObjects\Link' => 'index'
        ]
    );

    // --- Logo ---

    ExtbaseExtensionUtility::configurePlugin(
        $extensionKey,

        // The unique name of the content object in upper camel case:
        'Logo',

        // The array holding the controller-action-combinations that are accessible:
        [
            // The first controller and its first action will be the default
            'ContentObjects\Logo' => 'index'
        ],

        // The array of non-cacheable controller-action-combinations (they must already be enabled):
        [
            // 'ContentObjects\Logo' => 'index'
        ]
    );

    // --- Search bar ---

    ExtbaseExtensionUtility::configurePlugin(
        $extensionKey,

        // The unique name of the content object in upper camel case:
        'SearchBar',

        // The array holding the controller-action-combinations that are accessible:
        [
            // The first controller and its first action will be the default
            'ContentObjects\SearchBar' => 'index'
        ],

        // The array of non-cacheable controller-action-combinations (they must already be enabled):
        [
            // 'ContentObjects\SearchBar' => 'index'
        ]
    );

    // --- Spacer ---

    ExtbaseExtensionUtility::configurePlugin(
        $extensionKey,

        // The unique name of the content object in upper camel case:
        'Spacer',

        // The array holding the controller-action-combinations that are accessible:
        [
            // The first controller and its first action will be the default
            'ContentObjects\Spacer' => 'index'
        ],

        // The array of non-cacheable controller-action-combinations (they must already be enabled):
        [
            // 'ContentObjects\Spacer' => 'index'
        ]
    );

    // === Backend ===

    if (TYPO3_MODE === 'BE') {
        // --- Icons ---

        $iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
        $icons = [
            '1 column layout grid element' => "$iconsFolder/GridElements/ColumnLayoutGridElement/1Column.svg",
            '2 column layout grid element' => "$iconsFolder/GridElements/ColumnLayoutGridElement/2Column.svg",
            '3 column layout grid element' => "$iconsFolder/GridElements/ColumnLayoutGridElement/3Column.svg",
            '4 column layout grid element' => "$iconsFolder/GridElements/ColumnLayoutGridElement/4Column.svg",
            'Background' => "$iconsFolder/ContentObjects/Background.svg",
            'Bar grid element' => "$iconsFolder/GridElements/BarGridElement.svg",
            'Block grid element' => "$iconsFolder/GridElements/BlockGridElement.svg",
            'Cascading layout grid element' => "$iconsFolder/GridElements/CascadingLayoutGridElement.svg",
            'Conditionally grid element' => "$iconsFolder/GridElements/ConditionallyGridElement.svg",
            'Container grid element' => "$iconsFolder/GridElements/ContainerGridElement.svg",
            'Copyright' => "$iconsFolder/ContentObjects/Copyright.svg",
            'Flexbox grid element' => "$iconsFolder/GridElements/FlexboxGridElement.svg",
            'Flyout grid element' => "$iconsFolder/GridElements/FlyoutGridElement.svg",
            'Footer grid element' => "$iconsFolder/GridElements/FooterGridElement.svg",
            'Formatting grid element' => "$iconsFolder/GridElements/FormattingGridElement.svg",
            'Header grid element' => "$iconsFolder/GridElements/HeaderGridElement.svg",
            'Icon' => "$iconsFolder/ContentObjects/Icon.svg",
            'Label' => "$iconsFolder/ContentObjects/Label.svg",
            'Link' => "$iconsFolder/ContentObjects/Link.svg",
            'Logo' => "$iconsFolder/ContentObjects/Logo.svg",
            'Modal grid element' => "$iconsFolder/GridElements/ModalGridElement.svg",
            'Section grid element' => "$iconsFolder/GridElements/SectionGridElement.svg",
            'Search Bar' => "$iconsFolder/ContentObjects/SearchBar.svg",
            'Spacer' => "$iconsFolder/ContentObjects/Spacer.svg",
            'Viewport grid element' => "$iconsFolder/GridElements/ViewportGridElement.svg"
        ];

        foreach ($icons as $name => $source) {
            $iconSignature = IconUtility::getSignature($name);
            $iconIdentifier = IconUtility::getIdentifier($extensionKey, $iconSignature);

            $iconRegistry->registerIcon(
                $iconIdentifier,
                SvgIconProvider::class,
                ['source' => $source]
            );
        }
    }
})();
