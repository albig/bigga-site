<?php

/**
 * Extension Manager/Repository config file for ext "bigga_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bigga Site',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Bigga\\BiggaSite\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Alexander Bigga',
    'author_email' => 'linux@bigga.de',
    'author_company' => 'Bigga',
    'version' => '1.0.0',
];
