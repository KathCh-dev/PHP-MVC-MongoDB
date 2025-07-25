<?php

class Weapon{
    private string $_id; //ObjectId est considéré comme une string
    private string $name;
    private string $type;
    private string $effect;
    private string $damages;
    private string $precision;
    private string $fire_rate;
    private string $magazine;
    private string $elementary_bonuses;
    private float $price;
    private int $quantity;
    private string $zoom;

    public function __construct($_id, $name, $type, $effect, $damages, $precision, $fire_rate, $magazine, $elementary_bonuses, $price, $quantity, $zoom){
        $this->setId($_id);
        $this->setName($name);
        $this->setType($type);
        $this->setEffect($effect);
        $this->setDamages($damages);
        $this->setPrecision($precision);
        $this->setFireRate($fire_rate);
        $this->setMagazine($magazine);
        $this->setElementaryBonuses($elementary_bonuses);
        $this->setPrice($price);
        $this->setQuantity($quantity);
        $this->setZoom($zoom);
    }

    public function getId(){
        return $this->_id;
    }
    public function getName(){
        return $this->name;
    }
    public function getType(){
        return $this->type;
    }
    public function getEffect(){
        return $this->effect;
    }
    public function getDamages(){
        return $this->damages;
    }
    public function getPrecision(){
        return $this->precision;
    }
    public function getFireRate(){
        return $this->fire_rate;
    }
    public function getMagazine(){
        return $this->magazine;
    }
    public function getElementaryBonuses(){
        return $this->elementary_bonuses;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function getZoom(){
        return $this->zoom;
    }


    public function setId(string $_id){
        $this->_id = $_id;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function setType(string $type){
        $this->type = $type;
    }
    public function setEffect(string $effect){
        $this->effect = $effect;
    }
    public function setDamages(string $damages){
        $this->damages = $damages;
    }
    public function setPrecision(string $precision){
        $this->precision = $precision;
    }
    public function setFireRate($fire_rate){
        $this->fire_rate = $fire_rate;
    }
    public function setMagazine(string $magazine){
        $this->magazine = $magazine;
    }
    public function setElementaryBonuses(string $elementary_bonuses){
        $this->elementary_bonuses = $elementary_bonuses;
    }
    public function setPrice(float $price){
        $this->price = $price;
    }
    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }
    public function setZoom(string $zoom){
        $this->zoom = $zoom;
    }

}