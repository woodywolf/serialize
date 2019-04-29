<?php

namespace WoodyWolf\Serialize;


class SerializeJSON implements SerializerInterface
{

    public function serialize($value)
    {
        if (gettype($value) != "object") {
            echo "The argument must be an object";
            exit();
        }
        else
            return json_encode($value);

    }

    public function unserialize($value)
    {
        return json_decode($value,true);
    }
}


