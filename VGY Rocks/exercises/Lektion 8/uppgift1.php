<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

setcookie("visitedcookie", "true", time() + (60 * 60));//, "/simonhan/exercises/Lektion%208/", "www.vgy.rocks", 0);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 1</title>
</head>
<body>

<?php

echo 'Välkommen';

if (isset($_COOKIE['visitedcookie'])) {
    echo ' tillbaka!';
}

?>

</body>
</html>

