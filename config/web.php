<?php
return [
    'id' => 'school',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
//        'request' => [
//            'coockieValidationKey' => 'super secret code'
//        ],
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
    ],
];