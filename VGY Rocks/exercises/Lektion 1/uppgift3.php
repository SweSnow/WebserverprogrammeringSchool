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

$tot = 0;
for ($i = 1; $i <= 100; $i++) {
    $tot += $i;
}
echo "for loop $tot <br>";

$res = 0;
$j = 1;
while ($j <= 100) {
    $res += $j;
    $j++;   
}
echo "while loop $res<br>";

?>
</body>
</html>