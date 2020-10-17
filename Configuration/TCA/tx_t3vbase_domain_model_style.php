<?php
/**
 * The style TCA configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_base';
$lll = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_tca.xlf');
$iconsFolder = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

return [
    // === Columns ===

    'columns' => [
        // --- Custom columns ---

        'name' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.name',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim, required',
                'default' => 'Style',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'type' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$lll . 'tx_t3vbase_domain_model_style.type.backgroundColor', 'background-color'],
                    [$lll . 'tx_t3vbase_domain_model_style.type.backgroundImages', 'background-images'],
                    [$lll . 'tx_t3vbase_domain_model_style.type.color', 'color']
                ],
                'default' => 'background-color',
                'behaviour' => [
                    'allowLanguageSynchronization' => false
                ],
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false
                    ]
                ]
            ],
            'exclude' => true
        ],

        'selector' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.selector',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$lll . 'tx_t3vbase_domain_model_style.selector.gridElement', 'element'],
                    [$lll . 'tx_t3vbase_domain_model_style.selector.header', 'header'],
                    [$lll . 'tx_t3vbase_domain_model_style.selector.content', 'main'],
                    [$lll . 'tx_t3vbase_domain_model_style.selector.content', 'content'],
                    [$lll . 'tx_t3vbase_domain_model_style.selector.footer', 'footer']
                ],
                'default' => 'element',
                'behaviour' => [
                    'allowLanguageSynchronization' => false
                ],
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false
                    ]
                ]
            ],
            'exclude' => true
        ],

        'background_color' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.backgroundColor',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
                'size' => 10,
                'max' => 255,
                'eval' => 'trim'
            ],
            'exclude' => true
        ],

        'background_images' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.backgroundImages',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'background_images',
                [
                    'foreign_match_fields' => [
                        'fieldname' => 'background_images',
                        'tablenames' => 'tx_t3vbase_domain_model_style',
                        'table_local' => 'sys_file'
                    ],
                    'foreign_types' => [
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                             --palette--;;filePalette'
                        ]
                    ],
                    'minitems' => 0,
                    'maxitems' => 10,
                    'appearance' => [
                        'collapseAll' => true,
                        'expandSingle' => false,
                        'createNewRelationLinkTitle' => $lll . 'tx_t3vbase_domain_model_style.backgroundImages.createNewRelation.link.title',
                        'showAllLocalizationLink' => true,
                        'showPossibleLocalizationRecords' => true,
                        'showRemovedLocalizationRecords' => true,
                        'showSynchronizationLink' => true
                    ],
                    'behaviour' => [
                        'allowLanguageSynchronization' => true,
                        'disableMovingChildrenWithParent' => false,
                        'enableCascadingDelete' => true
                    ]
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            'exclude' => true
        ],

        'color' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.color',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
                'max' => 255,
                'eval' => 'trim',
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
                'foreign_table' => 'tx_t3vbase_domain_model_style',
                'foreign_table_where' => 'AND {#tx_t3vbase_domain_model_style}.{#pid}=###CURRENT_PID### AND {#tx_t3vbase_domain_model_style}.{#sys_language_uid} IN (-1,0)',
                'items' => [
                    ['', 0],
                ],
                'default' => 0
            ],
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true
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
                'eval' => 'datetime, int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
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
        'title' => $lll . 'tx_t3vbase_domain_model_style',
        'label' => 'name',
        // 'label_alt' => 'label',
        // 'label_alt_force' => 1,
        // 'descriptionColumn' => 'description',
        'type' => 'type',
        // 'typeicon_column' => 'type',
        // 'typeicon_classes' => [
        //   'default' => 'mimetypes-x-content-text'
        // ],
        // 'thumbnail' => 'thumbnail',
        'iconfile' => "${iconsFolder}/TCA/Style.svg",
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
        'searchFields' => 'name',
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
                --palette--;;backgroundColor,
                --palette--;;backgroundImages,
                --palette--;;color,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.language.label,
                --palette--;;language,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.access.label,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.visibility.label;visibility,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.access.label;access
            '
        ],

        'background-color' => [
            'showitem' => '
                --palette--;;backgroundColor,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.language.label,
                --palette--;;language,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.access.label,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.visibility.label;visibility,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.access.label;access
            '
        ],

        'background-images' => [
            'showitem' => '
                --palette--;;backgroundImages,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.language.label,
                --palette--;;language,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.access.label,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.visibility.label;visibility,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.access.label;access
            '
        ],

        'color' => [
            'showitem' => '
                --palette--;;color,
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
        'backgroundColor' => [
            'showitem' => '
                name, --linebreak--,
                type, --linebreak--,
                selector, --linebreak--,
                background_color
            ',
            'canNotCollapse' => true
        ],

        'backgroundImages' => [
            'showitem' => '
                name, --linebreak--,
                type, --linebreak--,
                selector, --linebreak--,
                background_images
            ',
            'canNotCollapse' => true
        ],

        'color' => [
            'showitem' => '
                name, --linebreak--,
                type, --linebreak--,
                selector, --linebreak--,
                color
            ',
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
