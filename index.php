<?php

Class Jacuzzi {

    public $amount_water;
    public $amount_non_water;

    public function __construct($wasser = 0, $nicht_wasser = 0) {
        $this->amount_water = $wasser;
        $this->amount_non_water = $nicht_wasser;
    }

    public function getWaterPurity() {

        return $this->amount_water / ($this->amount_water + $this->amount_non_water) * 100;
    }

}
$maudynes = new Jacuzzi(100,200);

print $maudynes->getWaterPurity();
var_dump($maudynes);