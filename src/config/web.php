<?php

$config = [
    'components' => [
        'urlManager' => 'luya\components\UrlManager',
        'view' => ['class' => 'luya\components\View'],
        'authManager' => [
            'class' => 'yii\rbaac\PhpManager'
        ],
    	'request' => [
    		'cookieValidationKey' => 'cookeivalidationkey',
    		'enableCsrfValidation' => false
    	],
    	'collection' => 'luya\components\Collection'
    ],
    'bootstrap' => [
        'luya\components\Bootstrap'
    ]
];

return $config;