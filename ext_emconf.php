<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'T3v Base',
  'description' => 'The base extension of TYPO3Voila.',
  'author' => 'Maik Kempe',
  'author_email' => 'mkempe@bitaculous.com',
  'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
  'category' => 'be',
  'state' => 'stable',
  'version' => '1.0.0',
  'createDirs' => '',
  'uploadfolder' => false,
  'clearCacheOnLoad' => false,
  'constraints' => [
    'depends' => [
      'typo3' => '8.7.0-8.7.99',
      't3v_core' => '',
      't3v_datamapper' => ''
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
