<?php

namespace App\Abstracts;

abstract class Sensor {

    protected $reading;

    protected abstract function read();

    public function getLastReading() {
        return $this->reading;
    }

}
