<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 1 feedback</title>
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

if (validate("firstname", "lastname", "email")) {
    if (!(ucfirst(strtolower(getParam("firstname"))) == getParam("firstname"))) {
        fail();
    } elseif (!(ucfirst(strtolower(getParam("lastname"))) == getParam("lastname"))) {
        fail();
    } elseif (strpos(getParam("email"), '@') === false) {
        fail();
    } else {
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