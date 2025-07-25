<?php
require '../vendor/autoload.php';

class DatabaseConnection{

    public function getConnection(){
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $collection = $client->Borderlands_Shop->weapons;
        
        $cursor = $collection->find([]); 
        
        foreach($cursor as $element){
            var_dump($element);
        }
    }
}

?>  