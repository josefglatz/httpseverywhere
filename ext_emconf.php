<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'httpseverywhere',
    'description' => 'Middleware for forcing HTTPS',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
        ],
    ],
    'version' => '1.0.0',
    'autoload' => [
        'psr-4' => [
            'Josefglatz\\Httpseverywhere\\' => 'Classes/',
        ],
    ],
];
