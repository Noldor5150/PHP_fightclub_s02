<?php

class ThailandSurpise {

    public $clothes;
    private $balls;
   
    public function __construct() {
        $this->balls = rand(0, 1);
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
$surprise = new ThailandSurpise();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">  
        <link rel="stylesheet" href="assets/css/app.css">  
        <title>OOP5</title>
    </head>
    <body>
        <img src="<?php print $surprise->getPhoto(); ?>">
    </body>
</html>