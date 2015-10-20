<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form action="uppgift.php" method="post">
    <input type="password" name="password">
    <button type="submit">Logga in</button>
</form>

</body>
</html>