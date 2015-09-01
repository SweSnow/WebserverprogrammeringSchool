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


if (isset($_POST["firstname"]) && $_POST["firstname"] != "" &&
    isset($_POST["lastname"]) && $_POST["lastname"] != "" &&
    isset($_POST["class"]) && $_POST["class"] != "") {
    echo "Hej " . $_POST["firstname"] . " " . $_POST["lastname"] .
        " i " . $_POST["class"] . "!<br>";
    echo "Du älskar " . $_POST["favfood"] . "!<br><br>";
}

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Förnamn:<br>
    <input type="text" name="firstname">
    <br>Efternamn:<br>
    <input type="text" name="lastname">
    <br>Klass:<br>
    <input type="text" name="class">
    <br>
    <br>
    <select name="favfood" size="1">
        <option value="Calzone vanlig">Calzone vanlig</option>
        <option value="Calzone extra ost">Calzone extra ost</option>
        <option value="Calzone extra skinka">Calzone extra skinka</option>
        <option value="Calzone extra ost och skinka">Calzone extra ost och skinka</option>
        <option value="Calzone dubbel">Calzone dubbel</option>
        <option value="Calzone med mozzarella">Calzone med mozzarella</option>
        <option value="Calzone extra tomatsås">Calzone extra tomatsås</option>
    </select>

    <input type="submit" value="Skicka">
</form>
</body>
</html>