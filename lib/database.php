<?php
require '../vendor/autoload.php';

$weapon = new MongoDB\Client("mongodb://localhost:27017");
$collection = $weapon->Borderlands_Shop->weapons;

$cursor = $collection->find([]); 

foreach($cursor as $element){
    echo $element["nom"] . "; ";
}

?>  