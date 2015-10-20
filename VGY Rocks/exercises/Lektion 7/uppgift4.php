<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 4</title>
</head>
<body>

<?php

class Ball {
    //protected för att kunna ärva
    protected $color;
    protected $radius;

    public function Ball($c, $r) {
        $this -> color = $c;
        $this -> radius = $r;
    }

    public function printInfo() {
        echo 'Color: ' . $this -> color;
        echo '<br>Radius: ' . $this -> radius . '<br><br>';
    }
}

class Football extends Ball {
    private $kicks;

    public function Football($c, $r, $k) {
        parent::Ball($c, $r);
        $this -> kicks = $k;
    }

    public function printInfo() {
        echo 'Kicks: ' . $this -> kicks . '<br>';
        parent::printInfo();
    }

    public function incrementKicks() {
        $this -> kicks++;
    }

    public function getKicks() {
        return $this -> kicks;
    }
}

class BouncyBall extends Ball {
    private $bounciness;

    public function BouncyBall($c, $r, $b) {
        parent::Ball($c, $r);
        $this -> bounciness = $b;
    }

    public function printInfo() {
        echo 'Bounciness: ' . $this -> bounciness . '<br>';
        parent::printInfo();
    }

    public function setBounciness($b) {
        $this -> bounciness = $b;
    }

    public function getBounciness() {
        return $this -> bounciness;
    }
}


$football = new Football('white', 2, 5);
$bouncyball = new BouncyBall('blue', 1, 0.7);

$football -> incrementKicks();
$bouncyball -> setBounciness(0.3);

$football -> printInfo();
$bouncyball -> printInfo();

?>

</body>
</html>