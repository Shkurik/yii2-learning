<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
    $this->beginPage();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I teach framework Yii2</title>
    <?php $this->head();?>
</head>
<body>
    <?php
        $this->beginBody();
        NavBar::begin([
            'brandLabel' => 'VideoSchool',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                    'class' => 'navbar-default navbar-fixet-top'
            ]
        ]);
        $menu = [
                ['label' => 'Join', 'url' => ['/site/join']],
                ['label' => 'Login', 'url' => ['/site/login']],
        ];
        echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menu
        ]);
        NavBar::end();
    ?>
    <?=$content?>
    <?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>
