<?php
/** @var string $_EXTKEY */

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3v Base',
    'description' => 'The base extension of TYPO3voilà.',
    'author' => 'Maik Kempe',
    'author_email' => 'mkempe@bitaculous.com',
    'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
    'category' => 'be',
    'state' => 'stable',
    'version' => '2.0.0',
    'createDirs' => '',
    'uploadfolder' => false,
    'clearCacheOnLoad' => false,
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'gridelements' => '',
            'sms_responsive_images' => '',
            'vhs' => '',
            't3v_core' => '',
            't3v_translations' => ''
        ],
        'conflicts' => [
        ],
        'suggests' => []
    ],
    'autoload' => [
        'psr-4' => [
            'T3v\\T3vBase\\' => 'Classes'
        ]
    ],
    'autoload-dev' => [
        'psr-4' => [
            'T3v\\T3vBase\\Tests\\' => 'Tests'
        ]
    ]
];
