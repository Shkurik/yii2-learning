<?php
$db = require __DIR__ . '/db.php';

return [
    'id' => 'school-console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => $db,
    ]
];