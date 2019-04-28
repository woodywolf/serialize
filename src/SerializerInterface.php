<?php

namespace App;


    interface SerializerInterface
    {
        public function serialize($value);
        public function unserialize($value);
    }