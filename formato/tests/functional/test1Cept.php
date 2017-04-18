<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Ver pagina de ocupacion');
$I->amOnPage('/localidad');
$I->canSee("Fecha");
