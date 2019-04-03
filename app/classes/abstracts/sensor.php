<?php

namespace App\Abstracts;

abstract class Sensor {

    protected $reading;

    abstract protected function read();

   protected function getLastReading() {
        return $this->reading;
    }

}
