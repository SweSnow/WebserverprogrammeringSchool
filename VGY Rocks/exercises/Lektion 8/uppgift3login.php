<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 3 Login</title>
</head>
<body>

<form method="post" action="uppgift3login.php">
    Kod:<br>
    <input type="text" name="code"><br>
    <input type="submit" value="Skicka">
</form>

<?php

if (isset($_POST["code"])) {
    $_SESSION["code"] = $_POST["code"];
    header("Location: uppgift3secret.php");
}

?>

</body>
</html>

