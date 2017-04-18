<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Probando la ruta de registrar usuario');
$I->amOnPage('/auth/register');
$I->canSee("Password");
$I->seeInCurrentUrl('/auth/register');


