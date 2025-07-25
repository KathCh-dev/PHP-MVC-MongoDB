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

        require_once __DIR__ . '/../views/home.php';
    }

    public function showWeapon(string $_id){
        $weapon = $this->weaponRepository->getWeapon($_id);

        require_once __DIR__ . '/../views/showWeapon.php';
    }

    public function createWeapon(){
        require_once __DIR__ . '/../views/createWeapon.php';
    }

    public function storeWeapon(){
        $weapon = new Weapon(
        "",
        $_POST['name'],
        $_POST['type'],
        $_POST['effect'],
        $_POST['damages'],
        $_POST['precision'],
        $_POST['fire_rate'],
        $_POST['magazine'],
        $_POST['elementary_bonuses'],
        $_POST['price'],
        $_POST['quantity'],
        $_POST['zoom']);
        $this->weaponRepository->createWeapon($weapon);

        header('Location: ?');
    }

    public function editWeapon(string $_id){
        $weapon = $this->weaponRepository->getWeapon($_id);

        require_once __DIR__ . '/../views/editWeapon.php';
    }

    public function updateWeapon(){
        $weapon = new Weapon(
        $_POST['_id'],
        $_POST['name'],
        $_POST['type'],
        $_POST['effect'],
        $_POST['damages'],
        $_POST['precision'],
        $_POST['fire_rate'],
        $_POST['magazine'],
        $_POST['elementary_bonuses'],
        $_POST['price'],
        $_POST['quantity'],
        $_POST['zoom']);
        $this->weaponRepository->updateWeapon($weapon);

        header('Location: ?');
    }

    public function deleteWeapon(string $_id){
        $this->weaponRepository->deleteWeapon($_id);

        header('Location: ?');
    }

    public function error(){
        require_once __DIR__ . '/../views/error.php';
        http_response_code(404);
    }
}