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

printHej(5);

function printHej($antal) {
    for ($i = 0; $i < $antal; $i++) {
        echo "Hejsvejs!<br>";
    }
}

?>
</body>
</html>