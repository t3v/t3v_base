<?php
defined('TYPO3_MODE') or die('Access denied.');

$extkey = 't3v_base';
$resources = "EXT:${extkey}/Resources";
$lll = "LLL:${resources}/Private/Language/locallang_tca.xlf:";

return [
    // === Columns ===

    'columns' => [
        // --- Custom columns ---

        'label' => [
            'label' => $lll . 'tx_t3vbase_domain_model_phone_number.label',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim, required'
            ],
            'l10n_mode' => 'mergeIfNotBlank',
            'exclude' => true
        ],

        'type' => [
            'label' => $lll . 'tx_t3vbase_domain_model_phone_number.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$lll . 'tx_t3vbase_domain_model_phone_number.type.telephone', 'TELEPHONE'],
                    [$lll . 'tx_t3vbase_domain_model_phone_number.type.fax', 'FAX'],
                    [$lll . 'tx_t3vbase_domain_model_phone_number.type.pager', 'PAGER']
                ],
                'eval' => 'trim, required'
            ],
            'l10n_mode' => 'mergeIfNotBlank',
            'exclude' => true
        ],

        'number' => [
            'label' => $lll . 'tx_t3vbase_domain_model_phone_number.number',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim, lower, required'
            ],
            'l10n_mode' => 'mergeIfNotBlank',
            'exclude' => true
        ],

        'international_number' => [
            'label' => $lll . 'tx_t3vbase_domain_model_phone_number.internationalNumber',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'alphanum_x, lower, trim'
            ],
            'l10n_mode' => 'mergeIfNotBlank',
            'exclude' => true
        ],

        'note' => [
            'label' => $lll . 'tx_t3vbase_domain_model_phone_number.note',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ],
            'defaultExtras' => 'richtext[]',
            'l10n_mode' => 'mergeIfNotBlank',
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
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ]
            ],
            'l10n_mode' => 'mergeIfNotBlank',
            'exclude' => true
        ],

        'endtime' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ]
            ],
            'l10n_mode' => 'mergeIfNotBlank',
            'exclude' => true
        ],

        'hidden' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check'
            ],
            'exclude' => true
        ],

        'sys_language_uid' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0
            ],
            'exclude' => true
        ],

        'l10n_parent' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0]
                ],
                'foreign_table' => 'tx_t3vbase_domain_model_phone_number',
                'foreign_table_where' => 'AND tx_t3vbase_domain_model_phone_number.pid=###CURRENT_PID### AND tx_t3vbase_domain_model_phone_number.sys_language_uid IN (-1,0)'
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
        'title' => $lll . 'tx_t3vbase_domain_model_phone_number',
        'label' => 'label',
        'label_alt' => 'number',
        'label_alt_force' => 1,
        // 'descriptionColumn' => 'description',
        'iconfile' => "${resources}/Public/Icons/TCA/PhoneNumber.svg",
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'cruser_id' => 'cruser_id',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        // 'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY number ASC',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        ],
        'searchFields' => 'label, number, international_number, note',
        'versioningWS' => true,
        'hideTable' => false
    ],

    // === Interface ===

    'interface' => [
        'showRecordFieldList' => 'label, number, international_number, hidden, starttime, endtime, sys_language_uid, l10n_parent, l10n_diffsource',
        'maxDBListItems' => 50,
        'maxSingleDBListItems' => 50
    ],

    // === Types ===

    'types' => [
        0 => [
            'showitem' => '
        --palette--;;generalPalette,
        --div--;LLL:EXT:t3v_core/Resources/Private/Language/locallang_ttc.xlf:tabs.language,
        --palette--;;languagePalette,
        --div--;LLL:EXT:t3v_core/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
        --palette--;;accessPalette
      '
        ]
    ],

    // === Palettes ===

    'palettes' => [
        'generalPalette' => [
            'showitem' => '
        label, --linebreak--,
        type, --linebreak--,
        number, --linebreak--,
        international_number, --linebreak--,
        note
      ',
            'columnsOverrides' => [
                'note' => [
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
