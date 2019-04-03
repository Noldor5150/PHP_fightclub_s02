<?php

namespace App;

class SensorFartHumidity extends Abstracts\Sensor {
    
    
        public function read() {
            
        return rand(0, 100) . '%';
    }
    

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

