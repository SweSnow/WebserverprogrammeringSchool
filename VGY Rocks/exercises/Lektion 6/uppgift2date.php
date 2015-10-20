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
echo 'Hello and welcome! Todays date is ' . date("ymj") . ' and the time is ' . date("H") . ":" . date("i") . ":" . date("s") . '.';
?>

</body>
</html>