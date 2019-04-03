<?php

namespace App;

class SensorFartHumidity extends \App\Abstracts\Sensor {

    public function read() {
        return rand(0, 100) . '%';
    }

}
