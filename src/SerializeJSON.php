<?php

namespace WoodyWolf\Serialize;


class SerializeJSON implements SerializerInterface
{

    public function serialize($value)
    {
        if (gettype($value) != "object") {
            throw new \Exception("The argument must be an object");
        }
            return json_encode($value);

    }

    public function unserialize($value)
    {
        return json_decode($value,true);
    }
}


