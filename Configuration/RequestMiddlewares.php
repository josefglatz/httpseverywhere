<?php

return [
    'frontend' => [
        'josefglatz/httpseverywhere/always-force-https' => [
            'target' => 'Josefglatz\\Httpseverywhere\\Middleware\\AlwaysForceHttps',
            'before' => [
                'typo3/cms-frontend/site',
            ],
        ],
    ],
];
