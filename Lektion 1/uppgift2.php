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

$text1 = "Kalle";
$enamn = "Anka";
$tal = 16;
$road = "Ankvägen";

echo "$text1 $enamn bor på $road $tal<br>";
echo '$text1 $enamn bor på $road $tal<br>';
echo $text1 . " " . $enamn . " bor på " . $road . " " . $tal . "<br>";

?>
</body>
</html>