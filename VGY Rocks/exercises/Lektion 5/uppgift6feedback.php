<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 6 feedback</title>
</head>
<body>
<?php

function validate() {
    for ($i = 0; $i < func_num_args(); $i++) {
        if (!isset($_POST[func_get_arg($i)]) || $_POST[func_get_arg($i)] == "") {
            return false;
        }
    }
    return true;
}


function getParam($key) {
    return $_POST[$key];
}

$res = getParam("text");

$consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');
$consonantsRov = array();

for ($i = 0; $i < count($consonants); $i++) {
    $consonantsRov[$i] = $consonants[$i] . 'o' . $consonants[$i];
}

$consonantsUC = array();

for ($i = 0; $i < count($consonants); $i++) {
    $consonantsUC[$i] = strtoupper($consonants[$i]);
}

$consonantsRovUC = array();

for ($i = 0; $i < count($consonantsUC); $i++) {
    $consonantsRovUC[$i] = $consonantsUC[$i] . 'O' . $consonantsUC[$i];
}

$res = str_replace($consonants, $consonantsRov, $res);
$res = str_replace($consonantsUC, $consonantsRovUC, $res);


echo 'Ursprunglig text: ' . getParam("text") . '<br>';
echo 'Rövarspråket: ' . $res;

function fail() {
    echo 'Det inskickade datat mötte inte kraven. <a href="uppgift1.php">Tillbaka</a>';
}

?>


</body>
</html>