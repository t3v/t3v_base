<?php
$EM_CONF['t3v_base'] = [
    'title' => 'T3v Base',
    'description' => 'The base extension of TYPO3voilà.',
    'author' => 'Maik Kempe',
    'author_email' => 'mkempe@bitaculous.com',
    'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
    'category' => 'fe',
    'state' => 'stable',
    'version' => '3.1.0',
    'createDirs' => '',
    'uploadfolder' => false,
    'clearCacheOnLoad' => false,
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            // 'container' => '',
            // 'gridelements' => '',
            'vhs' => '',
            'picture' => '',
            'sms_responsive_images' => '',
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
