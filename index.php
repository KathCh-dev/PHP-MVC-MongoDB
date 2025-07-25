<?php

require_once __DIR__ . '/controllers/WeaponController.php';
require_once __DIR__ . '/models/Weapon.php';
require_once __DIR__ . '/vendor/autoload.php';


$weaponController = new WeaponController();

$action = $_GET['action'] ?? 'index';
$_id = $_GET['_id'] ?? null;

switch($action){
    case 'index':
        $weaponController->home();
        break;
    case 'viewWeapon':
        $weaponController->showWeapon($_id);
        break;
    case 'createWeapon':
        $weaponController->createWeapon();
        break;
    case 'storeWeapon':
        $weaponController->storeWeapon();
        break;
    case 'editWeapon':
        $weaponController->editWeapon($_id);
        break;
    case 'updateWeapon':
        $weaponController->updateWeapon();
        break;
    case 'deleteWeapon':
        $weaponController->deleteWeapon($_id);
        break;
    default:
        $weaponController->error();
        break;
}
