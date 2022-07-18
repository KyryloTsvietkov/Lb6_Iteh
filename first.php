<?php

require_once __DIR__ . "/vendor/autoload.php";

$collection = (new MongoDB\Client)->itech_lab2->Report; 
if (isset($_GET["chief"])) {
    $chief = $_GET["chief"];

    $cursor = $collection->find(
        [
            'chief' => $chief
        ],
        [
            'projection' => ['_id' => 0, 'worker' => 1]
        ]
    
    );
    foreach ($cursor as $document) {
        print_r($document{'worker'}); echo '<br>';
    }
    
}
?>
