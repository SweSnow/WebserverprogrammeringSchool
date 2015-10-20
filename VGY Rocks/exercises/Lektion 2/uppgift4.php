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

echo getMax(1, -7, 8);
echo "<br><br>";
echo getMax(1, -7, 8, "vadsomhelst");

function getMax($num1, $num2, $num3, $nondefaultsort = false) {
    $list = array($num1, $num2, $num3);
    if (!$nondefaultsort) {
        return max($list);
    } else {
        return min($list);
    }
}

?>
</body>
</html>