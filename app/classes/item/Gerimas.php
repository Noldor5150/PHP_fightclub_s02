<?php

namespace App\Item;

Class Gerimas {

    private $data;

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'name' => null,
                'amount_ml' => null,
                'abarot' => null
            ];
        }
    }

    public function setName(string $name) {
        $this->data['name'] = $name;
    }

    public function setAmount(int $amount_ml) {
        $this->data['amount_ml'] = $amount_ml;
    }

    public function setAbarot(float $abarot) {
        $this->data['abarot'] = $abarot;
    }

    public function getName() {
        return $this->data['name'];
    }

    public function getAmount() {
        return $this->data['amount_ml'];
    }

    public function getAbarot() {
        return $this->data['abarot'];
    }

    public function getData() {
        return $this->data;
    }

    public function setData(array $data) {
        $this->setName($data['name']);
        $this->setAmount($data['amount_ml']);
        $this->setAbarot($data['abarot']);
    }

}

?>