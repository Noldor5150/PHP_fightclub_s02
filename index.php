<?php
declare (strict_types = 1);

Class Gerimas {

    private $data;

    public function __construct() {
        $this->data = ['name' => null,
            '$amount_ml' => null,
            ' $abarot' => null];
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setAmount(int $amount_ml) {
        $this->amount_ml = $amount_ml;
    }

    public function setAbarot(int $abarot) {
        $this->abarot = $abarot;
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
    
      public function getData(){
        return $this->data;
    }
  
     public function setData(array $data){
        return $this->data = [
            'name' => setName($data['name']),
            'amount_ml' => setAmount($data['amount_mle']),
            'abarot' => setAbarot($data['abarot'])
        ];
    }

}
$gerimas = new Gerimas();
?>
<html>
    <head>
        <title>OOP set ir get</title>
    </head>
    <body>

    </body>
</html>
