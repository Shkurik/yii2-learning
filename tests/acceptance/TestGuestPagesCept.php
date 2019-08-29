<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home');
$I->amOnPage('/');
$I->see('Welcome', 'h1');
$I->seeLink('Join','/site/join');
$I->seeLink('Login','/site/login');

$I->amOnPage('/site/join');
$I->seeLink('Join us','h1');

$I->amOnPage('/site/login');
$I->seeLink('Log in','h1');