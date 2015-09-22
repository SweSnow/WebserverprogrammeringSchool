
<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 1</title>
</head>
<body>

<?php

class Ball {
    var $color;
    var $radius;

    function printInfo() {
        echo 'Color: ' . $this -> color;
        echo '<br>Radius: ' . $this -> radius;
    }
}

$ball = new Ball();

$ball -> color = 'red';
$ball -> radius = 5;

$ball -> printInfo();

?>

</body>
</html>