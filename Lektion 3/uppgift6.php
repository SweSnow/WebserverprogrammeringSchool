<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 5</title>
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

if (validate("firstname", "lastname", "class", "favfood")) {
    $message = "Hej " . $_POST["firstname"] . " " . $_POST["lastname"] .
        " i " . $_POST["class"] . "!<br>" .
        "Du älskar " . $_POST["favfood"] . "!<br>";

    $favsubs = array();
    if (validate("favsubjectphys")) {
        array_push($favsubs, getParam("favsubjectphys"));
    }
    if (validate("favsubjectmath")) {
        array_push($favsubs, getParam("favsubjectmath"));
    }
    if (validate("favsubjectprog")) {
        array_push($favsubs, getParam("favsubjectprog"));
    }

    switch (count($favsubs)) {
        case 1:
            $message .= "Ditt favoritämne är $favsubs[0]";
            break;
        case 2:
            $message .= "Dina favoritämnen är $favsubs[0] och $favsubs[1]";
            break;
        case 3:
            $message .= "Dina favoritämnen är $favsubs[0], $favsubs[1] och $favsubs[2]";
            break;
    }

    echo $message;

    if (validate("email")) {
        mail(
            $_POST["email"],
            "Viktig information om din vän " . $_POST["firstname"] . " " . $_POST["lastname"],
            $message,
            "From: " . $_POST["email"] . "\nReply-To: no@reply.pls");
    }

}

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Förnamn:<br>
    <input type="text" name="firstname">
    <br>Efternamn:<br>
    <input type="text" name="lastname">
    <br>Klass:<br>
    <input type="text" name="class">
    <br>Email:<br>
    <input type="email" name="email">
    <br>
    <br>
    <select name="favfood" size="1">
        <option value="Calzone vanlig">Calzone vanlig</option>
        <option value="Calzone extra ost">Calzone extra ost</option>
        <option value="Calzone extra skinka">Calzone extra skinka</option>
        <option value="Calzone extra ost och skinka">Calzone extra ost och skinka</option>
        <option value="Calzone dubbel">Calzone dubbel</option>
        <option value="Calzone med mozzarella">Calzone med mozzarella</option>
        <option value="Calzone extra tomatsås">Calzone extra tomatsås</option>
    </select>

    <br>
    <br>

    <input type="checkbox" name="favsubjectphys" value="Fysik">Fysik<br>
    <input type="checkbox" name="favsubjectmath" value="Matematik">Matematik<br>
    <input type="checkbox" name="favsubjectprog" value="Programmering">Programmering<br>

    <br>
    <input type="submit" value="Skicka">
</form>
</body>
</html>