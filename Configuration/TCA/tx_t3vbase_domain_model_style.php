<?php
/**
 * The `tx_t3vbase_domain_model_style` TCA configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3') or die();

// === Variables ===

$extensionKey = 't3v_base';
$lll = \T3v\T3vCore\Utility\ExtensionUtility::getLocallang($extensionKey, 'locallang_tca.xlf');
$iconsFolder = \T3v\T3vCore\Utility\ExtensionUtility::getIconsFolder($extensionKey);

return [
    // === Columns ===

    'columns' => [
        // --- Custom columns ---

        'name' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.columns.name.label',
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
            'label' => $lll . 'tx_t3vbase_domain_model_style.columns.label.label',
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
            'label' => $lll . 'tx_t3vbase_domain_model_style.columns.type.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$lll . 'tx_t3vbase_domain_model_style.columns.type.config.items.backgroundColor.label', 'background-color'],
                    [$lll . 'tx_t3vbase_domain_model_style.columns.type.config.items.backgroundImages.label', 'background-images'],
                    [$lll . 'tx_t3vbase_domain_model_style.columns.type.config.items.color.label', 'color']
                ],
                'eval' => 'required, trim',
                'default' => 'background-color'
            ],
            'l10n_mode' => 'exclude',
            'exclude' => true
        ],

        'handle' => [
            'label' => $lll . 'tx_t3vbase_domain_model_theme.columns.handle.label',
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

        'selector' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.columns.selector.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$lll . 'tx_t3vbase_domain_model_style.columns.selector.config.items.element.label', 'element'],
                    [$lll . 'tx_t3vbase_domain_model_style.columns.selector.config.items.header.label', 'header'],
                    [$lll . 'tx_t3vbase_domain_model_style.columns.selector.config.items.main.label', 'main'],
                    [$lll . 'tx_t3vbase_domain_model_style.columns.selector.config.items.content.label', 'content'],
                    [$lll . 'tx_t3vbase_domain_model_style.columns.selector.config.items.footer.label', 'footer']
                ],
                'eval' => 'required, trim',
                'default' => 'element'
            ],
            'l10n_mode' => 'exclude',
            'exclude' => true
        ],

        'background_color' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.columns.backgroundColor.label',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
                'max' => 255,
                'size' => 10,
                'eval' => 'trim',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'background_images' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.columns.backgroundImages.label',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'foreign_match_fields' => [
                        'fieldname' => 'background_images',
                        'tablenames' => 'tx_t3vbase_domain_model_style',
                        'table_local' => 'sys_file'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\AbstractFile::FILETYPE_UNKNOWN => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette
                                '
                            ],
                            \TYPO3\CMS\Core\Resource\AbstractFile::FILETYPE_IMAGE => [
                                'showitem' => '
                                     --palette--;;imageoverlayPalette,
                                     --palette--;;filePalette
                                '
                            ]
                        ]
                    ],
                    // 'appearance' => [
                    //     'createNewRelationLinkTitle' => $lll . 'tx_t3vbase_domain_model_style.columns.backgroundImages.config.appearance.createNewRelationLinkTitle'
                    // ],
                    'behaviour' => [
                        'allowLanguageSynchronization' => true
                    ]
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            'exclude' => true
        ],

        'color' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.columns.color.label',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
                'max' => 255,
                'eval' => 'trim',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'description' => [
            'label' => $lll . 'tx_t3vbase_domain_model_style.columns.description.label',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
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
                'foreign_table_where' => 'AND tx_t3vbase_domain_model_style.pid=###CURRENT_PID### AND tx_t3vbase_domain_model_style.sys_language_uid IN (-1,0)',
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
        'title' => $lll . 'tx_t3vbase_domain_model_style.ctrl.title',
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
        'searchFields' => 'uid, name, label, type, handle, selector, background_color, background_images, color, description',
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
                label, --linebreak--,
                type, --linebreak--,
                handle, --linebreak--,
                selector, --linebreak--,
                background_color, --linebreak--,
                description
            ',
            'canNotCollapse' => true
        ],

        'backgroundImages' => [
            'showitem' => '
                name, --linebreak--,
                label, --linebreak--,
                type, --linebreak--,
                handle, --linebreak--,
                selector, --linebreak--,
                background_images, --linebreak--,
                description
            ',
            'canNotCollapse' => true
        ],

        'color' => [
            'showitem' => '
                name, --linebreak--,
                label, --linebreak--,
                type, --linebreak--,
                handle, --linebreak--,
                selector, --linebreak--,
                color, --linebreak--,
                description
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
