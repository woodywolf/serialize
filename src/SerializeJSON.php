<?php

namespace App;


class SerializeJSON implements SerializerInterface
{

    public function set($value)
    {
        return json_encode($value);
    }

    public function get($value)
    {
        return json_decode($value,true);
    }
}


class Data
{
    public $name;
    public $email;
}


$info=new \Data;
$info->name="Ender";
$info->email="@mail.com";
SerializeJSON($info);