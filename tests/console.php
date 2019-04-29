<?php
require_once __DIR__ . '/../vendor/autoload.php';

use WoodyWolf\Serialize\SerializeJSON;
use WoodyWolf\Serialize\SerializeYaml;

$JSON = new SerializeJSON;
$Yaml = new SerializeYaml;


$SerializedObject = $Yaml -> serialize($info);

print_r($SerializedObject);


