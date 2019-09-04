<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home');
$I->amOnPage('/');
$I->see('Welcome', 'h1');
$I->seeLink('Join','/user/join');
$I->seeLink('Login','/user/login');

$I->amOnPage('/user/join');
$I->seeLink('Join us','h1');

$I->amOnPage('/user/login');
$I->seeLink('Log in','h1');