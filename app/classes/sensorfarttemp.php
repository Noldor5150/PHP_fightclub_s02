<?php

namespace App;

class SensorFartTemp extends \App\Abstracts\Sensor  {

    public function read() {
        return rand(365, 425) / 10;
    }

}
