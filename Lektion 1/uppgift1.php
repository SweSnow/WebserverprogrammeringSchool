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

$tempFar = 20;
echo "Farenheit temperature: " . $tempFar . "<br>";
echo "Celsius temperature: " . round(farToCel($tempFar), 2);

function farToCel($far) {
	return (5 / 9) * ($far - 32);
}

?>
</body>
</html>