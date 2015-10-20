<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 8</title>
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

function calcAvg() {
    $tot = 0;

    for ($i = 0; $i < func_num_args(); $i++) {
        $tot += func_get_arg($i);
    }

    return $tot / func_num_args();
}

?>

<form method="post" action="">
    Nummer 1:<br>
    <input type="number" name="num1">
    <br>Number 2:<br>
    <input type="number" name="num2">
    <br>Number 3:<br>
    <input type="number" name="num3">
    <br><br>

    <input type="submit" value="Send">
</form>

<br><br>

<?php

if (validate("num1", "num2", "num3")) {
    echo "Number 1:" . getParam("num1") . "<br>";
    echo "Number 2:" . getParam("num2") . "<br>";
    echo "Number 3:" . getParam("num3") . "<br>";
    echo "Average:" . round(calcAvg(getParam("num1"), getParam("num2"), getParam("num3")), 2);
}

?>


</body>
</html>