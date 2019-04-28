<?php

namespace App;


class SerializeJSON implements SerializerInterface
{

    public function serialize($value)
    {
        try {
            if (gettype($value) != "object") {
                throw new \InvalidArgumentException("The argument must be an object");
            }
        }
        catch (\InvalidArgumentException $ex) {
            echo $ex->getMessage();
            exit();
        }
        return json_encode($value);

    }

    public function unserialize($value)
    {
        return json_decode($value,true);
    }
}


