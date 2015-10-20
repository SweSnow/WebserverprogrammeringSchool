<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 2</title>
</head>
<body>

<?php

echo 'Välkommen';

if (isset($_SESSION['visited']) && ($_SESSION["lastvisit"] + (60 * 60)) > time()) {
    echo ' tillbaka!';
}

$_SESSION["visited"] = "true";
$_SESSION["lastvisit"] = time();


?>

</body>
</html>

