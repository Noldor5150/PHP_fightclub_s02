<?php

class ThailandSurpise {

    public $clothes;
    private $balls;
    private $name;
   
    public function __construct($name) {
        $this->balls = rand(0, 1);
        $this->name = $name;
    }

    public function attachBalls() {
        $this->balls = true;
    }

    public function detachBalls() {
        $this->balls = false;
    }

    public function getPhoto() {
        if ($this->balls == true) {
           return 'images/balls.jpg';
        } else {
            return 'images/noballs.jpg';
        }
    }

}
$surprise = new ThailandSurpise('pizdabolas');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">  
        <link rel="stylesheet" href="assets/css/app.css">  
        <title>OOP6</title>
    </head>
    <body>
        <img src="<?php print $surprise->getPhoto(); ?>">
    </body>
</html>