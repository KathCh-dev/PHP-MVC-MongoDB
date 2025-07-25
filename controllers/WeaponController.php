<?php

require_once __DIR__ . '/../models/Weapon.php';
require_once __DIR__ . '/../models/repositories/WeaponRepository.php';

class WeaponController{
    private WeaponRepository $weaponRepository;

    public function __construct(){
        $this->weaponRepository = new WeaponRepository();
    }

    public function home(){
        $weapons = $this->weaponRepository->getWeapons();

        require_once __DIR__ . '../views/home.php';
    }

    public function showWeapon(string $_id){
        $weapon = $this->weaponRepository->getWeapon($_id);

        require_once __DIR__ . '../views/showWeapon.php';
    }

    public function createWeapon(){
        require_once __DIR__ . '../views/createWeapon.php';
    }

    public function storeWeapon(){
        $weapon = new Weapon();
        $weapon->setName($_POST['name']);
        $weapon->setType($_POST['type']);
        $weapon->setEffect($_POST['effect']);
        $weapon->setDamages($_POST['damages']);
        $weapon->setPrecision($_POST['precision']);
        $weapon->setFireRate($_POST['fire_rate']);
        $weapon->setMagazine($_POST['magazine']);
        $weapon->setElementaryBonuses($_POST['elementary_bonuses']);
        $weapon->setPrice($_POST['price']);
        $weapon->setQuantity($_POST['quantity']);
        $weapon->setZoom($_POST['zoom']);

        header('Location: ?');
    }

    public function editWeapon(string $_id){
        $weapon = $this->weaponRepository->getWeapon($_id);

        require_once __DIR__ . '../views/editWeapon.php';
    }

    public function updateWeapon(){
        $weapon = new Weapon();
        $weapon->setId($_POST['_id']);
        $weapon->setName($_POST['name']);
        $weapon->setType($_POST['type']);
        $weapon->setEffect($_POST['effect']);
        $weapon->setDamages($_POST['damages']);
        $weapon->setPrecision($_POST['precision']);
        $weapon->setFireRate($_POST['fire_rate']);
        $weapon->setMagazine($_POST['magazine']);
        $weapon->setElementaryBonuses($_POST['elementary_bonuses']);
        $weapon->setPrice($_POST['price']);
        $weapon->setQuantity($_POST['quantity']);
        $weapon->setZoom($_POST['zoom']);
        $this->weaponRepository->update($weapon);

        header('Location: ?');
    }

    public function deleteWeapon(string $_id){
        $this->weaponRepository->delete($_id);

        header('Location: ?');
    }

    public function error(){
        require_once __DIR__ . '/../views/error.php';
        http_response_code(404);
    }
}