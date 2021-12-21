<?php
defined('TYPO3_MODE') or die('Access denied.');

$extkey = 't3v_base';
$resources = "EXT:${extkey}/Resources";
$lll = "LLL:${resources}/Private/Language/locallang_tca.xlf:";

return [
    // === Columns ===

    'columns' => [
        // --- Custom columns ---

        'name' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.name',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim, required',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'abstract' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.abstract',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'countries' => [
            'label' => $lll . 'tx_t3vbase_domain_model_region.countries',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 10,
                'minitems' => 0,
                'maxitems' => 100,
                'exclusiveKeys' => '',
                'foreign_table' => 'tx_t3vbase_domain_model_country',
                'foreign_table_where' => 'AND tx_t3vbase_domain_model_country.sys_language_uid IN (-1,0) AND tx_t3vbase_domain_model_country.hidden = 0 AND tx_t3vbase_domain_model_country.deleted = 0 ORDER BY name ASC',
                'MM' => 'tx_t3vbase_country_region_mm',
                'MM_opposite_field' => 'regions'
            ],
            'l10n_mode' => 'exclude',
            'exclude' => true
        ],

        // --- Default TYPO3 columns ---

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

        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'passthrough'
            ]
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

        'starttime' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
                'renderType' => 'inputDateTime',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'endtime' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
                'renderType' => 'inputDateTime',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'hidden' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check'
            ],
            'exclude' => true
        ],

        'sys_language_uid' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0
            ],
            'exclude' => true
        ],

        'l10n_parent' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0]
                ],
                'foreign_table' => 'tx_t3vbase_domain_model_region',
                'foreign_table_where' => 'AND tx_t3vbase_domain_model_region.pid=###CURRENT_PID### AND tx_t3vbase_domain_model_region.sys_language_uid IN (-1,0)'
            ],
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true
        ],

        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ]
    ],

    // === Ctrl ===

    'ctrl' => [
        'title' => $lll . 'tx_t3vbase_domain_model_region',
        'label' => 'name',
        // 'label_alt' => 'abstract',
        // 'label_alt_force' => 1,
        // 'descriptionColumn' => 'description',
        'iconfile' => "${resources}/Public/Icons/TCA/Region.svg",
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'cruser_id' => 'cruser_id',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        // 'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY name ASC',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        ],
        'searchFields' => 'name, abstract',
        'versioningWS' => true,
        'hideTable' => false
    ],

    // === Interface ===

    'interface' => [
        'showRecordFieldList' => 'name, hidden, starttime, endtime, sys_language_uid, l10n_parent, l10n_diffsource',
        'maxDBListItems' => 50,
        'maxSingleDBListItems' => 50
    ],

    // === Types ===

    'types' => [
        0 => [
            'showitem' => '--palette--;;generalPalette,--div--;LLL:EXT:t3v_core/Resources/Private/Language/locallang_ttc.xlf:tabs.language,--palette--;;languagePalette,--div--;LLL:EXT:t3v_core/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;;accessPalette'
        ]
    ],

    // === Palettes ===

    'palettes' => [
        'generalPalette' => [
            'showitem' => '
        name, --linebreak--,
        abstract, --linebreak--,
        countries
      ',
            'columnsOverrides' => [
                'abstract' => [
                    'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts_css]'
                ]
            ],
            'canNotCollapse' => true
        ],

        'languagePalette' => [
            'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource',
            'canNotCollapse' => true
        ],

        'accessPalette' => [
            'showitem' => '
        hidden, --linebreak--,
        starttime, endtime
      ',
            'canNotCollapse' => true
        ]
    ]
];

// === T3v Generator ===
