<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 3 Secret</title>
</head>
<body>

<?php

if ($_SESSION["code"] == '1234') {
    echo 'Hemlis!';
} else {
    header("Location: uppgift3login.php");
}

?>

</body>
</html>

