<?php

namespace App;


    interface SerializerInterface
    {
        public function set($value);
        public function get($value);
    }