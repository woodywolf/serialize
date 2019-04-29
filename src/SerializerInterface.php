<?php

namespace WoodyWolf\Serialize;


    interface SerializerInterface
    {
        public function serialize($value);
        public function unserialize($value);
    }