<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift</title>
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

if (!validate('password') || getParam("password") != "kalleboll321") {
    if (!validate("email")) {
        echo 'Felaktigt lösenord!<br><a href="login.php">Tillbaka</a> ';
    }
} else {
    $questions = array("Vad integralen från 0 till oändligheten för e^-t dt?", "Vad är 0!", "Vad är e^(iπ)?");
    $correctqalts = array("alt2", "alt3", "alt1");

    $q1alts = array("Oändligt", "1", "0", "e");
    $q2alts = array("0", "0/0", "1", "1/0");
    $q3alts = array("cos(π)+i*sin(π)", "1", "π", "0");

    $stdqalts = array("alt1", "alt2", "alt3", "alt4");
    $stdqans = array("q1ans", "q2ans", "q3ans");

    $alts = array($q1alts, $q2alts, $q3alts);

    if (validate("steps")) {
        $steps = getParam("steps");
    } else {
        $steps = 0;
    }
    if (!validate("name")) {
        $steps = 0;
    }

    if ($steps == 0) {
        echo '<form method="post" action="">Namn:<br><input type="text" name="name"><br><br>';
    } else {
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="name" value="' . getParam("name") . '">';
    }

    if ($steps <= count($questions)) {
        for ($i = 0; $i < $steps; $i++) {
            if (!validate($stdqans[$i])) {
                $steps--;
            }
        }
    }

    if ($steps < count($questions)) {
        echo $questions[$steps] . "<br>";
        for ($i = 0; $i < count($alts[$steps]); $i++) {
            echo '<input type="radio" name="' . $stdqans[$steps] . '" value="' . $stdqalts[$i] . '">' . $alts[$steps][$i] . '<br>';
        }
        for ($i = 0; $i < $steps; $i++) {
            echo '<input type="hidden" name="' . $stdqans[$i] . '" value="' . getParam($stdqans[$i]) . '">';
        }

    } else {
        $correct = 0;

        for ($i = 0; $i < count($questions); $i++) {
            if (getParam($stdqans[$i]) == $correctqalts[$i]) {
                $correct++;
            }
        }

        echo '</form>';

        echo "Grattis " . getParam("name") . "! Du fick $correct rätt!<br>";
        echo '
    <form method="post" action="send.php">
        <br>Email<br>
        <input type="email" name="email"><br>
        <input type="hidden" name="message" value="Jag fick ' . $correct . ' rätt på Simons quiz!">
        <input type="submit" value="Dela"></button>';

        for ($i = 0; $i < count($questions); $i++) {

            echo "<br>" . $questions[$i] . "<br>";
            for ($j = 0; $j < count($alts[$i]); $j++) {
                if (getParam($stdqans[$i]) == $stdqalts[$j]) {
                    if ($stdqalts[$j] == $correctqalts[$i]) {
                        echo '<span style="background: seagreen;">' . $alts[$i][$j] . "</span><br>";
                    } else {
                        echo '<span style="background: orangered;">' . $alts[$i][$j] . "</span><br>";
                    }
                } else {
                    if ($stdqalts[$j] == $correctqalts[$i]) {
                        echo '<span style="background: seagreen;">' . $alts[$i][$j] . "</span><br>";
                    } else {
                        echo $alts[$i][$j] . "<br>";
                    }
                }
            }
        }
    }

    if ($steps != 3) {
        if ($steps == 2) {
            echo '<br><input type="submit" value="Klar">';
        } else {
            echo '<br><input type="submit" value="Nästa">';
        }
    }
}

?>

<input type="hidden" name="steps" value="<?php echo ($steps + 1) ?>">
<input type="hidden" name="password" value="<?php echo getParam("password") ?>">

<form>

</body>
</html>