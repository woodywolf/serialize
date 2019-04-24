<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\SerializeJSON;

class Data
{
    public $name;
    public $email;
}


$info=new Data;
$info->name="Ender";
$info->email="@mail.com";

SerializeJSON($info);
