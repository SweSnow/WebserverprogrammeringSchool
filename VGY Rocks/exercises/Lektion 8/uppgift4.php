<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 4</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    Tal:<br>
    <input type="number" name="number"><br>
    <input type="submit" value="Skicka">
</form>
<br>
<?php

function validate() {
    for ($i = 0; $i < func_num_args(); $i++) {
        if (!isset($_POST[func_get_arg($i)]) || $_POST[func_get_arg($i)] == "") {
            return false;
        }
    }
    return true;
}

$numberlist = array();

if (isset($_SESSION["data"])) {
    $numberlist = explode(",", $_SESSION["data"]);
}

if (validate("number")) {
    array_push($numberlist, $_POST["number"]);
}

$result = "";
$total = 0;
for ($i = 0; $i < count($numberlist); $i++) {
    if ($i == 0) {
        $result .= $numberlist[$i];
    } else {
        $result .= ("," . $numberlist[$i]);
    }

    $_SESSION["data"] = $result;

    $total += $numberlist[$i];
    echo $numberlist[$i] . "<br>";
}

if (count($numberlist) != 0) {
    $avg = $total / count($numberlist);
    echo "<br> Average: " . $avg;
}
?>

</body>
</html>
