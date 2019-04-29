<?php


namespace App;
use Symfony\Component\Yaml\Yaml;


class SerializeYaml implements SerializerInterface
{

    public function serialize($value)
    {
        if (gettype($value) != "object") {
            echo "The argument must be an object";
            exit();
        }
        else
            $arr =  (array) $value;
            return Yaml::dump($arr);

    }

    public function unserialize($value)
    {
        return Yaml::parse($value);
    }
}