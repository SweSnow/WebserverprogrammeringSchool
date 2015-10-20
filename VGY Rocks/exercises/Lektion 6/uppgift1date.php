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
$date = getdate();
echo "Year: " . $date['year'];
echo "<br>Month: " . $date['mon'];
echo "<br>Day: " . $date['mday'];
echo "<br>Weekday: " . $date['weekday'];

?>

</body>
</html>