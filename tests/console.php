<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\SerializeJSON;
use App\SerializeYaml;

$JSON = new SerializeJSON;
$Yaml = new SerializeYaml;


$j = ($JSON->serialize());
$y = ($Yaml->serialize());
print_r($j);
print_r($y);