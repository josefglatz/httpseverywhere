<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'httpseverywhere',
    'description' => 'Middleware for forcing HTTPS',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99',
        ],
    ],
    'version' => '1.0.5',
    'state' => 'stable',
    'autoload' => [
        'psr-4' => [
            'Josefglatz\\Httpseverywhere\\' => 'Classes/',
        ],
    ],
    'author' => 'Josef Glatz',
    'author_email' => 'typo3@josefglatz.at',
    'author_company' => 'J18',
];
