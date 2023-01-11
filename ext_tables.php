<?php
/**
 * The extension tables configuration.
 */

use T3v\T3vCore\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(static function () {
    // === Variables ===

    $extensionKey = 't3v_base';
    $languageFolder = ExtensionUtility::getLanguageFolder($extensionKey);

    // === TCA ===

    $tables = [
        'tx_t3vbase_domain_model_address',
        'tx_t3vbase_domain_model_country',
        'tx_t3vbase_domain_model_country_group',
        'tx_t3vbase_domain_model_email_address',
        'tx_t3vbase_domain_model_format',
        'tx_t3vbase_domain_model_phone_number',
        'tx_t3vbase_domain_model_property',
        'tx_t3vbase_domain_model_region',
        'tx_t3vbase_domain_model_style',
        'tx_t3vbase_domain_model_theme'
    ];

    foreach ($tables as $table) {
        ExtensionManagementUtility::addLLrefForTCAdescr($table, "$languageFolder/locallang_csh_$table.xlf");
        ExtensionManagementUtility::allowTableOnStandardPages($table);
    }

    // === T3v Generator ===
})();
