<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 4</title>
</head>
<body>

<form method="post" action="uppgift4feedback.php">
    Förnamn:<br>
    <input type="text" name="firstname"><br>
    Efternamn:<br>
    <input type="text" name="lastname"><br>
    Email:<br>
    <input type="email" name="email"><br>
    <input type="submit" value="Skicka">
</form>


</body>
</html>