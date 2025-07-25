<?php

require_once __DIR__ . '/../Weapon.php';
require_once __DIR__ . '/../../lib/database.php';

use MongoDB\BSON\ObjectId;

class WeaponRepository{
    private MongoDB\Collection $collection;

    public function __construct(){
        $this->connection = new DatabaseConnection();
    }

    public function getWeapons(): array{
        $client = new MongoDB\Client();
        $collection = $client->Borderlands_Shop->weapons;

        $weapons = [];
        $cible = $this->$collection->find();
        foreach($cible as $element){
            $weapon = new Weapon();
            $weapon->setId((string)$element['_id']);
            $weapon->setName($element['name']);
            $weapon->setType($element['type']);
            $weapon->setEffect($element['effect']);
            $weapon->setDamages($element['damages']);
            $weapon->setPrecision($element['precision']);
            $weapon->setFireRate($element['fire_rate']);
            $weapon->setMagazine($element['magazine']);
            $weapon->setElementaryBonuses($element['elementary_bonuses']);
            $weapon->setPrice($element['price']);
            $weapon->setQuantity($element['quantity']);
            $weapon->setZoom($element['zoom']);

            $weapons[] = $weapon;
        }

        return $weapons;
    }

    public function getWeapon(string $_id) ?Weapon {
        $element = $this->collection->findOne(['_id' => new ObjectId($_id)]);

        if(!$element) return null;

        $weapon = new Weapon();
        $weapon->setId((string)$element['_id']);
        $weapon->setName($element['name']);
        $weapon->setType($element['type']);
        $weapon->setEffect($element['effect']);
        $weapon->setDamages($element['damages']);
        $weapon->setPrecision($element['precision']);
        $weapon->setFireRate($element['fire_rate']);
        $weapon->setMagazine($element['magazine']);
        $weapon->setElementaryBonuses($element['elementary_bonuses']);
        $weapon->setPrice($element['price']);
        $weapon->setQuantity($element['quantity']);
        $weapon->setZoom($element['zoom']);
 
        return $weapon;
    }

    public function createWeapon(Weapon $weapon): void {
        $this->collection->insertOne([
            'name'=>$weapon->getName(),
            'type'=>$weapon->getType(),
            'effect'=>$weapon->getEffect(),
            'damages'=>$weapon->getDamages(),
            'precision'=>$weapon->getPrecision(),
            'fire_rate'=>$weapon->getFireRate(),
            'magazine'=>$weapon->getMagazine(),
            'elementary_bonuses'=>$weapon->getElementaryBonuses(),
            'price'=>$weapon->getPrice(),
            'quantity'=>$weapon->getQuantity(),
            'zoom'=>$weapon->getZoom()
        ]);
    }

    public function updateWeapon(Weapon $weapon): void {
        $this->collection->updateOne(
            ['_id'=> new ObjectId($weapon->getId())],
            ['$set'=>[
                'name'=>$weapon->getName(),
                'type'=>$weapon->getType(),
                'effect'=>$weapon->getEffect(),
                'damages'=>$weapon->getDamages(),
                'precision'=>$weapon->getPrecision(),
                'fire_rate'=>$weapon->getFireRate(),
                'magazine'=>$weapon->getMagazine(),
                'elementary_bonuses'=>$weapon->getElementaryBonuses(),
                'price'=>$weapon->getPrice(),
                'quantity'=>$weapon->getQuantity(),
                'zoom'=>$weapon->getZoom()
            ]]
        )
    }

    public function deleteWeapon(string $_id): void {
        $this->collection->deleteOne([
            '_id'=>new ObjectId($_id)
        ]);
    }
}