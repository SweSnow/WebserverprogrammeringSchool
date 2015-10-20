<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 2</title>
</head>
<body>

<?php

class Ball {
    var $color;
    var $radius;

    function Ball($c, $r) {
        $this -> color = $c;
        $this -> radius = $r;
    }

    function printInfo() {
        echo 'Color: ' . $this -> color;
        echo '<br>Radius: ' . $this -> radius . '<br><br>';
    }
}


$ball1 = new Ball('red', 1);
$ball2 = new Ball('green', 2);
$ball3 = new Ball('blue', 2);

$ball1 -> printInfo();
$ball2 -> printInfo();
$ball3 -> printInfo();

?>

</body>
</html>