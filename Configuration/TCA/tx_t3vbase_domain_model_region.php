<?php
/**
 * The `tx_t3vbase_domain_model_region` TCA configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_base';
$lll = \T3v\T3vCore\Utility\ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');
$iconsFolder = \T3v\T3vCore\Utility\ExtensionUtility::getIconsFolder($extensionKey);

return [
    // === Columns ===

    'columns' => [
        // --- Custom columns ---

        'name' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.columns.name.label',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'required, trim',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'label' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.columns.label.label',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'type' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.columns.type.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$lll . 'tx_t3vbase_domain_model_region.columns.type.config.items.default', 'default']
                ],
                'eval' => 'required, trim',
                'default' => 'default',
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false
                    ]
                ]
            ],
            'l10n_mode' => 'exclude',
            'exclude' => true
        ],

        'handle' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.columns.handle.label',
            'config' => [
                'type' => 'slug',
                'generatorOptions' => [
                    'fields' => ['name'],
                    'fieldSeparator' => '-',
                    'prefixParentPageSlug' => false
                ],
                'fallbackCharacter' => '-',
                'prependSlash' => false,
                'eval' => 'trim',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'countries' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.columns.countries.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_t3vbase_domain_model_country',
                'foreign_table_where' => 'AND tx_t3vbase_domain_model_country.sys_language_uid IN (-1,0) AND tx_t3vbase_domain_model_country.hidden = 0 AND tx_t3vbase_domain_model_country.deleted = 0 ORDER BY name ASC',
                'MM' => 'tx_t3vbase_country_region_mm',
                'MM_opposite_field' => 'regions',
                'minitems' => 0,
                'maxitems' => 100
            ],
            'l10n_mode' => 'exclude',
            'exclude' => true
        ],

        'description' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.columns.description.label',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                // 'richtextConfiguration' => 'default',
                'eval' => 'trim',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        // --- Standard columns ---

        'uid' => [
            'label' => 'uid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'pid' => [
            'label' => 'pid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'sys_language_uid' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.sysLanguageUid.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false
                    ]
                ]
            ],
            'exclude' => true
        ],

        'l10n_parent' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.l10nParent.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_t3vbase_domain_model_region',
                'foreign_table_where' => 'AND tx_t3vbase_domain_model_region.pid=###CURRENT_PID### AND tx_t3vbase_domain_model_region.sys_language_uid IN (-1,0)',
                'items' => [
                    ['', 0],
                ],
                'default' => 0
            ],
            'displayCond' => 'FIELD:sys_language_uid:>:0'
        ],

        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],

        'hidden' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.hidden.label',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ]
            ],
            'exclude' => true
        ],

        'starttime' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.starttime.label',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime, int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'endtime' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.endtime.label',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'eval' => 'datetime, int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'fe_group' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.feGroup.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
                'items' => [
                    ['LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:shared.hideAtLogin.label', -1],
                    ['LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:shared.anyLogin.label', -2],
                    ['LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:shared.userGroups.label', '--div--']
                ],
                'exclusiveKeys' => '-1, -2',
                'size' => 5,
                'maxitems' => 20
            ],
            'exclude' => true
        ],

        'editlock' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.editlock.label',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => ''
                    ]
                ]
            ],
            'exclude' => true
        ],

        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'cruser_id' => [
            'label' => 'cruser_id',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'sorting' => [
            'label' => 'sorting',
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ],

    // === Ctrl ===

    'ctrl' => [
        'title' => $lll . 'tx_t3vbase_domain_model_region.ctrl.title',
        'label' => 'name',
        'label_alt' => 'label',
        // 'label_alt_force' => 1,
        'descriptionColumn' => 'description',
        'type' => 'type',
        // 'typeicon_column' => 'type',
        // 'typeicon_classes' => [
        //     'default' => 'mimetypes-x-content-text'
        // ],
        // 'thumbnail' => 'thumbnail',
        'iconfile' => "$iconsFolder/TCA/Region.svg",
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'editlock' => 'editlock',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'tstamp' => 'tstamp',
        // 'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY name ASC',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group'
        ],
        'searchFields' => 'name, label, type, handle, description',
        // 'hideAtCopy' => true,
        // 'prependAtCopy' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:ctrl.prependAtCopy.label',
        'useColumnsForDefaultValues' => 'type, sys_language_uid',
        // 'hideTable' => true,
        'versioningWS' => true
    ],

    // === Interface ===

    'interface' => [
        'maxDBListItems' => 20,
        'maxSingleDBListItems' => 100
    ],

    // === Types ===

    'types' => [
        0 => [
            'showitem' => '
                --palette--;;general,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.appearance.label,
                --palette--;;appearance,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.language.label,
                --palette--;;language,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.access.label,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.visibility.label;visibility,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.access.label;access
            '
        ]
    ],

    // === Palettes ===

    'palettes' => [
        'general' => [
            'showitem' => '
                name, --linebreak--,
                label, --linebreak--,
                type, --linebreak--,
                handle, --linebreak--,
                countries, --linebreak--,
                description
            ',
            'canNotCollapse' => true
        ],

        'appearance' => [
            'showitem' => 'layout',
            'canNotCollapse' => true
        ],

        'language' => [
            'showitem' => 'sys_language_uid, l10n_parent',
            'canNotCollapse' => true
        ],

        'visibility' => [
            'showitem' => 'hidden',
            'canNotCollapse' => true
        ],

        'access' => [
            'showitem' => '
                starttime, endtime, --linebreak--,
                fe_group, --linebreak--,
                editlock
            ',
            'canNotCollapse' => true
        ]
    ]
];
