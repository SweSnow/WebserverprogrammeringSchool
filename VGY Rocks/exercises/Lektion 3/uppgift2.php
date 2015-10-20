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

if (isset($_GET["name"]) && $_GET["name"] != "") {
    echo "Hjärtligt välkommen " . $_GET["name"] . "!";
}

?>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Namn:<br>
    <input type="text" name="name">
    <input type="submit" value="Skicka">
</form>
</body>
</html>