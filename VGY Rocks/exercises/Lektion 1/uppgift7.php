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
$i = 2;
while (count($list) < 100) {
	if (isPrime($i)) {
		array_push($list, $i);
   	 	echo 'Found prime: ' . $i . "<br>";
	}
	$i++;
}

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