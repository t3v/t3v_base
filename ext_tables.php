<?php
/**
 * The extension tables configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

(static function () {
    // === Variables ===

    $extensionKey = 't3v_base';
    $languageFolder = \T3v\T3vCore\Utility\ExtensionUtility::getLanguageFolder($extensionKey);

    // === Models ===

    $tables = [
        'tx_t3vbase_domain_model_country',
        'tx_t3vbase_domain_model_country_group',
        'tx_t3vbase_domain_model_department',
        'tx_t3vbase_domain_model_email_address',
        'tx_t3vbase_domain_model_format',
        'tx_t3vbase_domain_model_phone_number',
        'tx_t3vbase_domain_model_postal_address',
        'tx_t3vbase_domain_model_region',
        'tx_t3vbase_domain_model_style',
        'tx_t3vbase_domain_model_theme'
    ];

    foreach ($tables as $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($table);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            $table,
            "{$languageFolder}/locallang_csh_{$table}.xlf"
        );
    }

    /** _XXX_T3V_GENERATOR_XXX_ */
})();
