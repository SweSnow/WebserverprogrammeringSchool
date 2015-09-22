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
echo a();

function a() {
    return 'Hello and welcome! Today\'s date is ' . date("l \\t\\h\\e j F, Y.");
}

?>

</body>
</html>