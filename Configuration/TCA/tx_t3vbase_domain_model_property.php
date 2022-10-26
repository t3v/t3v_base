<?php
declare(strict_types=1);

/**
 * The `tx_t3vbase_domain_model_property` TCA configuration.
 */

use T3v\T3vCore\Utility\ExtensionUtility;

defined('TYPO3') or die();

// === Variables ===

$extensionKey = 't3v_base';
$lll = ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');
$iconsFolder = ExtensionUtility::getIconsFolder($extensionKey);

return [
    // === Columns ===

    'columns' => [
        // --- Custom columns ---

        'name' => [
            'label' => $lll . 'tx_t3vbase_domain_model_property.columns.name.label',
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
            'label' => $lll . 'tx_t3vbase_domain_model_property.columns.label.label',
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
            'label' => $lll . 'tx_t3vbase_domain_model_property.columns.type.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$lll . 'tx_t3vbase_domain_model_property.columns.type.config.items.default.label', 'default'],
                    [$lll . 'tx_t3vbase_domain_model_property.columns.type.config.items.text.label', 'text'],
                    [$lll . 'tx_t3vbase_domain_model_property.columns.type.config.items.richText.label', 'rich_text']
                ],
                'eval' => 'required, trim',
                'default' => 'text'
            ],
            'l10n_mode' => 'exclude',
            'exclude' => true
        ],

        'handle' => [
            'label' => $lll . 'tx_t3vbase_domain_model_property.columns.handle.label',
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

        'text' => [
            'label' => $lll . 'tx_t3vbase_domain_model_property.columns.text.label',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'rich_text' => [
            'label' => $lll . 'tx_t3vbase_domain_model_property.columns.richText.label',
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

        'description' => [
            'label' => $lll . 'tx_t3vbase_domain_model_property.columns.description.label',
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
                'foreign_table' => 'tx_t3vbase_domain_model_property',
                'foreign_table_where' => 'AND tx_t3vbase_domain_model_property.pid=###CURRENT_PID### AND tx_t3vbase_domain_model_property.sys_language_uid IN (-1,0)',
                'items' => [
                    ['', 0]
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
                'maxitems' => 20,
                'size' => 10
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
        'title' => $lll . 'tx_t3vbase_domain_model_property.ctrl.title',
        'label' => 'name',
        'label_alt' => 'label',
        // 'label_alt_force' => 1,
        'type' => 'type',
        // 'descriptionColumn' => 'description',
        // 'typeicon_column' => 'type',
        // 'typeicon_classes' => [
        //     'default' => 'mimetypes-x-content-text'
        // ],
        // 'thumbnail' => 'thumbnail',
        'iconfile' => "$iconsFolder/TCA/Property.svg",
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
        'searchFields' => 'uid, name, label, type, handle, text, rich_text, description',
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
                --palette--;;text,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.appearance.label,
                --palette--;;appearance,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.language.label,
                --palette--;;language,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.access.label,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.visibility.label;visibility,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.access.label;access
            '
        ],

        'text' => [
            'showitem' => '
                --palette--;;text,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.appearance.label,
                --palette--;;appearance,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.language.label,
                --palette--;;language,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.access.label,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.visibility.label;visibility,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.access.label;access
            '
        ],

        'rich_text' => [
            'showitem' => '
                --palette--;;rich_text,
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
        'text' => [
            'showitem' => '
                name, --linebreak--,
                label, --linebreak--,
                type, --linebreak--,
                handle, --linebreak--,
                text, --linebreak--,
                description
            ',
            'canNotCollapse' => true
        ],

        'rich_text' => [
            'showitem' => '
                name, --linebreak--,
                label, --linebreak--,
                type, --linebreak--,
                handle, --linebreak--,
                rich_text, --linebreak--,
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
