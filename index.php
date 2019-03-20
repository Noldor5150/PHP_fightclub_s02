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
class User{
    public function peeInJakuzzi(Jacuzzi $jakuzzi,$amount) {
        $jakuzzi->amount_non_water +=$amount ;
    }
}
$maudynes = new Jacuzzi(600000,0);
$Piotras = new User ;
$Piotra = new User ;
$Piotras->peeInJakuzzi($maudynes, rand(1000, 2000));
$Piotra->peeInJakuzzi($maudynes, rand(500, 1000));
print $maudynes->getWaterPurity();
