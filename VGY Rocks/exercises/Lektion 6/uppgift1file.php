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
echo 'Helloj!<br>';
for ($i = 0; $i < 3; $i++) {
    include('hejsvejs.txt');
}

?>

</body>
</html>