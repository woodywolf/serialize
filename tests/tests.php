<?php

require_once __DIR__ . '/../vendor/autoload.php';

use WoodyWolf\Serialize\SerializeJSON;
use WoodyWolf\Serialize\SerializeYaml;


class Data
{
    public $name;
    public $email;
}


$info=new Data;
$info->name="Ender";
$info->email="@mail.com";
$test=["1"=>"information"];

$JSON = new SerializeJSON;
$Yaml = new SerializeYaml;


$j = ($JSON->serialize($info));
$y = ($Yaml->serialize($info));
print_r($j);
print_r($y);

$junserialize = ($JSON->unserialize($j));
$yunserialize = ($Yaml->unserialize($y));
print_r($junserialize);
print_r($yunserialize );

$ja = ($JSON->serialize($test));
$ya = ($Yaml->serialize($test));
print_r($ja);
print_r($ya);



