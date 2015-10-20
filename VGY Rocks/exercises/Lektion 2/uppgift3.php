<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 3</title>
</head>
<body>
<?php

echo getMax(1, -7, 8);

function getMax($num1, $num2, $num3) {
    $list = array($num1, $num2, $num3);
    return max($list);
}

?>
</body>
</html>