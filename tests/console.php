<?php
require_once __DIR__ . '/../vendor/autoload.php';

use WoodyWolf\Serialize\SerializeJSON;
use WoodyWolf\Serialize\SerializeYaml;

$JSON = new SerializeJSON;
$Yaml = new SerializeYaml;



try {
    $SerializedObject = $Yaml->serialize($yourobject);
    var_dump($SerializedObject);
}
catch (Exception $e){
    echo "Exception:", $e->getMessage(), "\n";
}

