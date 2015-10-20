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

$list = array();

for ($i = -20; $i <= 40; $i += 10) {
    echo "Celsius $i, Fahrenheit " . celToFar($i). "<br>";
    $list[$i/10][0] = $i;
    $list[$i/10][1] = celToFar($i);
}
echo "<br>";

for ($i = -2; $i < count($list) - 2; $i++) {
    echo "Celsius " . $list[$i][0] . ", Fahrenheit " . $list[$i][1] . "<br>";
}

echo "<br>";
echo "<br>";

var_dump($list);

echo "<br>";
echo "<br>";

print_r($list);

function celToFar($cel) {
	return $cel * (9/5) + 32;
}


?>
</body>
</html>