<?php


namespace App;
use Symfony\Component\Yaml\Yaml;


class SerializeYaml implements SerializerInterface
{

    public function serialize($value)
    {
        try {
            if (gettype($value) != "object") {
                throw new \InvalidArgumentException("The argument is must be an object");
            }
        }
        catch (\InvalidArgumentException $ex) {
            echo $ex->getMessage();
            exit();
        }

        $arr =  (array) $value;
        return Yaml::dump($arr);

    }

    public function unserialize($value)
    {
        return Yaml::parse($value);
    }
}