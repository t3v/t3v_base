<?php
/**
 * The local extension configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$namespace = 'T3v';
$extensionKey = 't3v_base';
$extensionSignature = \T3v\T3vCore\Utility\ExtensionUtility::getSignature($namespace, $extensionKey);
$tsConfigFolder = \T3v\T3vCore\Utility\ExtensionUtility::getTSConfigFolder($extensionKey);
$iconsFolder = \T3v\T3vCore\Utility\ExtensionUtility::getIconsFolder($extensionKey);

// === TSconfig ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "<INCLUDE_TYPOSCRIPT: source=\"{$tsConfigFolder}/Page.tsconfig\">"
);

// === Content Objects ===

// --- Background Content Object ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content object in upper camel case
    'Background',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentObjects\Background' => 'index'
    ],

    // The array of non-cacheable controller-action-combinations (they must already be enabled)
    [
        // 'ContentObjects\Background' => 'index'
    ]
);

// --- Copyright Content Object ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content object in upper camel case
    'Copyright',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentObjects\Copyright' => 'index'
    ],

    // The array of non-cacheable controller-action-combinations (they must already be enabled)
    [
        // 'ContentObjects\Copyright' => 'index'
    ]
);

// --- Label Content Object ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content object in upper camel case
    'Label',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentObjects\Label' => 'index'
    ],

    // The array of non-cacheable controller-action-combinations (they must already be enabled)
    [
        // 'ContentObjects\Label' => 'index'
    ]
);

// --- Icon Content Object ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content object in upper camel case
    'Icon',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentObjects\Icon' => 'index'
    ],

    // The array of non-cacheable controller-action-combinations (they must already be enabled)
    [
        // 'ContentObjects\Icon' => 'index'
    ]
);

// --- Link Content Object ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content object in upper camel case
    'Link',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentObjects\Link' => 'index'
    ],

    // The array of non-cacheable controller-action-combinations (they must already be enabled)
    [
        // 'ContentObjects\Link' => 'index'
    ]
);

// --- Logo Content Object ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content object in upper camel case
    'Logo',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentObjects\Logo' => 'index'
    ],

    // The array of non-cacheable controller-action-combinations (they must already be enabled)
    [
        // 'ContentObjects\Logo' => 'index'
    ]
);

// --- Spacer Content Object ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content object in upper camel case
    'Spacer',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentObjects\Spacer' => 'index'
    ],

    // The array of non-cacheable controller-action-combinations (they must already be enabled)
    [
        // 'ContentObjects\Spacer' => 'index'
    ]
);

// === Backend ===

if (TYPO3_MODE === 'BE') {
    // --- Icons ---

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    $icons = [
        'Background' => "{$iconsFolder}/ContentObjects/Background.svg",
        'Copyright' => "{$iconsFolder}/ContentObjects/Copyright.svg",
        'Icon' => "{$iconsFolder}/ContentObjects/Icon.svg",
        'Label' => "{$iconsFolder}/ContentObjects/Label.svg",
        'Link' => "{$iconsFolder}/ContentObjects/Link.svg",
        'Logo' => "{$iconsFolder}/ContentObjects/Logo.svg",
        'Spacer' => "{$iconsFolder}/ContentObjects/Spacer.svg",
        'Header Grid Element' => "{$iconsFolder}/GridElements/HeaderGridElement.svg",
        'Section Grid Element' => "{$iconsFolder}/GridElements/SectionGridElement.svg",
        'Footer Grid Element' => "{$iconsFolder}/GridElements/FooterGridElement.svg",
        'Flexbox Grid Element' => "{$iconsFolder}/GridElements/FlexboxGridElement.svg",
        '1 Column Layout Grid Element' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/1Column.svg",
        '2 Column Layout Grid Element' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/2Column.svg",
        '3 Column Layout Grid Element' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/3Column.svg",
        '4 Column Layout Grid Element' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/4Column.svg",
        'Cascading Layout Grid Element' => "{$iconsFolder}/GridElements/CascadingLayoutGridElement.svg",
        'Container Grid Element' => "{$iconsFolder}/GridElements/ContainerGridElement.svg",
        'Formatting Grid Element' => "{$iconsFolder}/GridElements/FormattingGridElement.svg",
        'Bar Grid Element' => "{$iconsFolder}/GridElements/BarGridElement.svg",
        'Block Grid Element' => "{$iconsFolder}/GridElements/BlockGridElement.svg",
        'Flyout Grid Element' => "{$iconsFolder}/GridElements/FlyoutGridElement.svg",
        'Pop Up Grid Element' => "{$iconsFolder}/GridElements/PopUpGridElement.svg",
        'Conditionally Grid Element' => "{$iconsFolder}/GridElements/ConditionallyGridElement.svg",
        'Viewport Grid Element' => "{$iconsFolder}/GridElements/ViewportGridElement.svg"
    ];

    foreach ($icons as $name => $source) {
        $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::identifier($name);
        $iconSignature = \T3v\T3vCore\Utility\IconUtility::signature($extensionKey, $iconIdentifier);

        $iconRegistry->registerIcon(
            $iconSignature,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => $source]
        );
    }
}

/** _XXX_T3V_CREATOR_XXX_ **/
