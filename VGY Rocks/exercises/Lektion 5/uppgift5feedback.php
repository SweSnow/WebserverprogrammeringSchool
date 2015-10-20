<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 5 feedback</title>
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

if (validate("username", "password")) {
    if (strlen(getParam("password")) < 6) {
        fail();
    } elseif (strpos(getParam("username"), "php") === false) {
        fail();
    } else {

        $containsNum = false;
        for ($i = 0; $i < 10; $i++) {
            if (strpos(getParam("password"), strval($i)) !== false) {
                $containsNum = true;
            }
        }

        if (!$containsNum) {
            fail();
            return;
        }

        echo 'Det inskickade datat mötte kraven!';
    }
} else {
    fail();
}

function fail() {
    echo 'Det inskickade datat mötte inte kraven. <a href="uppgift1.php">Tillbaka</a>';
}

?>


</body>
</html>