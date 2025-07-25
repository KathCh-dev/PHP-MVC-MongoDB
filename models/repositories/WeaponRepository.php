<?php

require_once __DIR__ . '/../Weapon.php';
require_once __DIR__ . '/../../lib/database.php';

use MongoDB\BSON\ObjectId;
use MongoDB\Client;

class WeaponRepository
{
    private MongoDB\Collection $collection;

    public function __construct()
    {
        $client = new Client("mongodb://localhost:27017");
        $this->collection = $client->Borderlands_Shop->weapons;
    }

    public function getWeapons()
    {
        $weapons = [];
        $cible = $this->collection->find();

        foreach ($cible as $element) {
            $weapon = new Weapon(
                $element['_id'],
                $element['name'],
                $element['type'],
                $element['effect'],
                $element['damages'],
                $element['precision'],
                $element['fire_rate'],
                $element['magazine'],
                $element['elementary_bonuses'],
                $element['price'],
                $element['quantity'],
                $element['zoom']??""
            );
            $weapons[] = $weapon;
        }

        return $weapons;

    }

    public function getWeapon(string $_id): ?Weapon
    {
        $element = $this->collection->findOne(['_id' => new ObjectId($_id)]);

        if (!$element)
            return null;

        $weapon = new Weapon(
            $element['_id'],
            $element['name'],
            $element['type'],
            $element['effect'],
            $element['damages'],
            $element['precision'],
            $element['fire_rate'],
            $element['magazine'],
            $element['elementary_bonuses'],
            $element['price'],
            $element['quantity'],
            $element['zoom']??""
        );
        return $weapon;
    }

    public function createWeapon(Weapon $weapon): void
    {
        $this->collection->insertOne([
            'name' => $weapon->getName(),
            'type' => $weapon->getType(),
            'effect' => $weapon->getEffect(),
            'damages' => $weapon->getDamages(),
            'precision' => $weapon->getPrecision(),
            'fire_rate' => $weapon->getFireRate(),
            'magazine' => $weapon->getMagazine(),
            'elementary_bonuses' => $weapon->getElementaryBonuses(),
            'price' => $weapon->getPrice(),
            'quantity' => $weapon->getQuantity(),
            'zoom' => $weapon->getZoom()
        ]);
    }

    public function updateWeapon(Weapon $weapon): void
    {
        $this->collection->updateOne(
            ['_id' => new ObjectId($weapon->getId())],
            [
                '$set' => [
                    'name' => $weapon->getName(),
                    'type' => $weapon->getType(),
                    'effect' => $weapon->getEffect(),
                    'damages' => $weapon->getDamages(),
                    'precision' => $weapon->getPrecision(),
                    'fire_rate' => $weapon->getFireRate(),
                    'magazine' => $weapon->getMagazine(),
                    'elementary_bonuses' => $weapon->getElementaryBonuses(),
                    'price' => $weapon->getPrice(),
                    'quantity' => $weapon->getQuantity(),
                    'zoom' => $weapon->getZoom()
                ]
            ]
        );
    }

    public function deleteWeapon(string $_id): void
    {
        $this->collection->deleteOne([
            '_id' => new ObjectId($_id)
        ]);
    }
}