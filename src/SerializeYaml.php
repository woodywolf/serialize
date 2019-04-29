<?php


namespace WoodyWolf\Serialize;
use Symfony\Component\Yaml\Yaml;


class SerializeYaml implements SerializerInterface
{

    public function serialize($value)
    {
        if (gettype($value) != "object") {
            throw new \Exception("The argument must be an object");
        }
            $arr =  (array) $value;
            return Yaml::dump($arr);

    }

    public function unserialize($value)
    {
        return Yaml::parse($value);
    }
}