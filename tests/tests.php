<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\SerializeJSON;
use App\SerializeYaml;


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

$junserialize = ($JSON->unserialize($info));
$yunserialize = ($Yaml->unserialize($info));
print_r($junserialize);
print_r($yunserialize );

$ja = ($JSON->serialize($test));
$ya = ($Yaml->serialize($test));
print_r($ja);
print_r($ya);



