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
            'label' => $lll . 'tx_t3vbase_domain_model_postal_address.label',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'street' => [
            'label' => $lll . 'tx_t3vbase_domain_model_postal_address.street',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'street_number' => [
            'label' => $lll . 'tx_t3vbase_domain_model_postal_address.streetNumber',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'postal_code' => [
            'label' => $lll . 'tx_t3vbase_domain_model_postal_address.postalCode',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'locality' => [
            'label' => $lll . 'tx_t3vbase_domain_model_postal_address.locality',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'region' => [
            'label' => $lll . 'tx_t3vbase_domain_model_postal_address.region',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_t3vbase_domain_model_region',
                'size' => 1,
                'eval' => 'trim',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'country' => [
            'label' => $lll . 'tx_t3vbase_domain_model_postal_address.country',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_t3vbase_domain_model_country',
                'size' => 1,
                'eval' => 'trim',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
            'exclude' => true
        ],

        'note' => [
            'label' => $lll . 'tx_t3vbase_domain_model_postal_address.note',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                ['behaviour' => ['allowLanguageSynchronization' => true]]
            ],
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
                'foreign_table' => 'tx_t3vbase_domain_model_postal_address',
                'foreign_table_where' => 'AND tx_t3vbase_domain_model_postal_address.pid=###CURRENT_PID### AND tx_t3vbase_domain_model_postal_address.sys_language_uid IN (-1,0)'
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
        'title' => $lll . 'tx_t3vbase_domain_model_postal_address',
        'label' => 'locality',
        'label_alt' => 'street',
        'label_alt_force' => 1,
        // 'descriptionColumn' => 'description',
        'iconfile' => "${resources}/Public/Icons/TCA/PostalAddress.svg",
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'cruser_id' => 'cruser_id',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        // 'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY locality ASC',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        ],
        'searchFields' => 'label, street, street_number, postal_code, locality, note',
        'versioningWS' => true,
        'hideTable' => false
    ],

    // === Interface ===

    'interface' => [
        'showRecordFieldList' => 'label, street, street_number, postal_code, locality, hidden, starttime, endtime, sys_language_uid, l10n_parent, l10n_diffsource',
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
        label, --linebreak--,
        street, street_number, --linebreak--,
        postal_code, locality, --linebreak--,
        region, --linebreak--,
        country, --linebreak--,
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
