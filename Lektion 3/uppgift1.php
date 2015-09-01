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

if (isset($_POST["name"]) && $_POST["name"] != "") {
    echo "Hjärtligt välkommen " . $_POST["name"] . "!";
}

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Namn:<br>
    <input type="text" name="name">
    <input type="submit" value="Skicka">
</form>
</body>
</html>