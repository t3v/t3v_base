<?php
declare(strict_types=1);

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
            '1 Column Layout Grid Element' => "$iconsFolder/GridElements/ColumnLayoutGridElement/1Column.svg",
            '2 Column Layout Grid Element' => "$iconsFolder/GridElements/ColumnLayoutGridElement/2Column.svg",
            '3 Column Layout Grid Element' => "$iconsFolder/GridElements/ColumnLayoutGridElement/3Column.svg",
            '4 Column Layout Grid Element' => "$iconsFolder/GridElements/ColumnLayoutGridElement/4Column.svg",
            'Background' => "$iconsFolder/ContentObjects/Background.svg",
            'Bar Grid Element' => "$iconsFolder/GridElements/BarGridElement.svg",
            'Block Grid Element' => "$iconsFolder/GridElements/BlockGridElement.svg",
            'Cascading Layout Grid Element' => "$iconsFolder/GridElements/CascadingLayoutGridElement.svg",
            'Conditionally Grid Element' => "$iconsFolder/GridElements/ConditionallyGridElement.svg",
            'Container Grid Element' => "$iconsFolder/GridElements/ContainerGridElement.svg",
            'Copyright' => "$iconsFolder/ContentObjects/Copyright.svg",
            'Flexbox Grid Element' => "$iconsFolder/GridElements/FlexboxGridElement.svg",
            'Flyout Grid Element' => "$iconsFolder/GridElements/FlyoutGridElement.svg",
            'Footer Grid Element' => "$iconsFolder/GridElements/FooterGridElement.svg",
            'Formatting Grid Element' => "$iconsFolder/GridElements/FormattingGridElement.svg",
            'Header Grid Element' => "$iconsFolder/GridElements/HeaderGridElement.svg",
            'Icon' => "$iconsFolder/ContentObjects/Icon.svg",
            'Label' => "$iconsFolder/ContentObjects/Label.svg",
            'Link' => "$iconsFolder/ContentObjects/Link.svg",
            'Logo' => "$iconsFolder/ContentObjects/Logo.svg",
            'Modal Grid Element' => "$iconsFolder/GridElements/ModalGridElement.svg",
            'Section Grid Element' => "$iconsFolder/GridElements/SectionGridElement.svg",
            'Search Bar' => "$iconsFolder/ContentObjects/SearchBar.svg",
            'Spacer' => "$iconsFolder/ContentObjects/Spacer.svg",
            'Viewport Grid Element' => "$iconsFolder/GridElements/ViewportGridElement.svg"
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

    // === T3v Generator ===
})();
