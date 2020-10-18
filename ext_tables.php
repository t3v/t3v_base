<?php
/**
 * The extension tables configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_base';
$languageFolder = \T3v\T3vCore\Utility\ExtensionUtility::getLanguageFolder($extensionKey);

// === Models ===

// --- Country Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_country');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_country',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_country.xlf"
);

// --- Country Group Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_country_group');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_country_group',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_country_group.xlf"
);

// --- Department Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_department');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_department',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_department.xlf"
);

// --- Email Address Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_email_address');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_email_address',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_email_address.xlf"
);

// --- Format Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_format');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_format',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_format.xlf"
);

// --- Phone Number Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_phone_number');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_phone_number',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_phone_number.xlf"
);

// --- Postal Address Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_postal_address');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_postal_address',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_postal_address.xlf"
);

// --- Region Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_region');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_region',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_region.xlf"
);

// --- Style Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_style');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_style',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_style.xlf"
);

// --- Theme Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vbase_domain_model_theme');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vbase_domain_model_theme',
    "${languageFolder}/locallang_csh_tx_t3vbase_domain_model_theme.xlf"
);

/** _XXX_T3V_CREATOR_XXX_ */
