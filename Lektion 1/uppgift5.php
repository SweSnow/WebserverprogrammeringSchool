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
for ($i = 0; $i < 10; $i++) {
    $list[$i] = pow(2, $i);
    echo "Item " . (($i)+1) . ': ' . $list[$i] . "<br>";
}

echo "<br>";
echo "Medelvärde " . array_sum($list)/count($list);

?>
</body>
</html>