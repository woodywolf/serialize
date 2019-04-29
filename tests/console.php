<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\SerializeJSON;
use App\SerializeYaml;

$JSON = new SerializeJSON;
$Yaml = new SerializeYaml;

$SerializedObject = $Yaml -> serialize($yourobject);

print_r($SerializedObject);


