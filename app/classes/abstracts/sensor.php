<?php

namespace App\Abstracts;

abstract class Sensor {

    protected $reading;

    abstract protected function read();

    public function getLastReading() {
        return $this->reading;
    }

}
