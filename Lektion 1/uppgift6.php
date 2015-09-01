<?php
	error_reporting(-1);
	ini_set('display_errors', 1);
	ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Uppgift 5</title>
</head>
<body>
<?php

$list = array();
for ($i = 2; $i < 100; $i++) {
	if (isPrime($i)) {
		array_push($list, $i);
   	 	echo 'Found prime: ' . $i . "<br>";

	}
}

echo "<br>Total number of primes is " . count($list);

function isPrime($num) {
	for ($i = 2; $i < $num; $i++) {
		if ($num % $i  == 0) {
			return false;
		}
	}
	return true;
}

?>
</body>
</html>