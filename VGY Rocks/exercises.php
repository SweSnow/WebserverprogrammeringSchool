<?php
include("incl/config.php");
$title = "Webbserv1: Övningar";
$pageId = "exercises";
$pageStyle = '
ul#exer {
 list-style-type:none;
}
ul#exer a {
 margin:-40px;
}
';

include("incl/header.php");
?>

<!-- sidans huvudinnehåll  -->
<div id="content">
    <aside><p></p><p></p>

        <!-- Menyn med övningar  -->
        <h3>Mina övningar</h3>
        <nav>
            <ul id="exer">
                <li><a href="exercises/Lektion 1/uppgift1.php" target="_blank">Lektion 1 Uppgift 1</a></li>
                <li><a href="exercises/Lektion 1/uppgift2.php" target="_blank">Lektion 1 Uppgift 2</a></li>
                <li><a href="exercises/Lektion 1/uppgift3.php" target="_blank">Lektion 1 Uppgift 3</a></li>
                <li><a href="exercises/Lektion 1/uppgift4.php" target="_blank">Lektion 1 Uppgift 4</a></li>
                <li><a href="exercises/Lektion 1/uppgift5.php" target="_blank">Lektion 1 Uppgift 5</a></li>
                <li><a href="exercises/Lektion 1/uppgift6.php" target="_blank">Lektion 1 Uppgift 6</a></li>
                <li><a href="exercises/Lektion 1/uppgift7.php" target="_blank">Lektion 1 Uppgift 7</a></li>

                <li><a href="exercises/Lektion 2/uppgift1.php" target="_blank">Lektion 2 Uppgift 1</a></li>
                <li><a href="exercises/Lektion 2/uppgift2.php" target="_blank">Lektion 2 Uppgift 2</a></li>
                <li><a href="exercises/Lektion 2/uppgift3.php" target="_blank">Lektion 2 Uppgift 3</a></li>
                <li><a href="exercises/Lektion 2/uppgift4.php" target="_blank">Lektion 2 Uppgift 4</a></li>
                <li><a href="exercises/Lektion 2/uppgift5.php" target="_blank">Lektion 2 Uppgift 5</a></li>
                <li><a href="exercises/Lektion 2/uppgift6.php" target="_blank">Lektion 2 Uppgift 6</a></li>
                <li><a href="exercises/Lektion 2/uppgift7.php" target="_blank">Lektion 2 Uppgift 7</a></li>
                <li><a href="exercises/Lektion 2/uppgift8.php" target="_blank">Lektion 2 Uppgift 8</a></li>
                <li><a href="exercises/Lektion 2/uppgift9.php" target="_blank">Lektion 2 Uppgift 9</a></li>

                <li><a href="exercises/Lektion 3/uppgift1.php" target="_blank">Lektion 3 Uppgift 1</a></li>
                <li><a href="exercises/Lektion 3/uppgift2.php" target="_blank">Lektion 3 Uppgift 2</a></li>
                <li><a href="exercises/Lektion 3/uppgift3.php" target="_blank">Lektion 3 Uppgift 3</a></li>
                <li><a href="exercises/Lektion 3/uppgift4.php" target="_blank">Lektion 3 Uppgift 4</a></li>
                <li><a href="exercises/Lektion 3/uppgift5.php" target="_blank">Lektion 3 Uppgift 5</a></li>
                <li><a href="exercises/Lektion 3/uppgift6.php" target="_blank">Lektion 3 Uppgift 6</a></li>
                <li><a href="exercises/Lektion 3/uppgift7start.php" target="_blank">Lektion 3 Uppgift 7 Start</a></li>
                <li><a href="exercises/Lektion 3/uppgift7result.php" target="_blank">Lektion 3 Uppgift 7 Result</a></li>
                <li><a href="exercises/Lektion 3/uppgift8.php" target="_blank">Lektion 3 Uppgift 8</a></li>

                <li><a href="exercises/Lektion 4/login.php" target="_blank">Lektion 4 Login</a></li>
                <li><a href="exercises/Lektion 4/send.php" target="_blank">Lektion 4 Send</a></li>
                <li><a href="exercises/Lektion 4/uppgift.php" target="_blank">Lektion 4 Uppgift</a></li>

                <li><a href="exercises/Lektion 5/uppgift1.php" target="_blank">Lektion 5 Uppgift 1</a></li>
                <li><a href="exercises/Lektion 5/uppgift1feedback.php" target="_blank">Lektion 5 Uppgift 1 Feedback</a></li>
                <li><a href="exercises/Lektion 5/uppgift2.php" target="_blank">Lektion 5 Uppgift 2</a></li>
                <li><a href="exercises/Lektion 5/uppgift2feedback.php" target="_blank">Lektion 5 Uppgift 2 Feedback</a></li>
                <li><a href="exercises/Lektion 5/uppgift3.php" target="_blank">Lektion 5 Uppgift 3</a></li>
                <li><a href="exercises/Lektion 5/uppgift3feedback.php" target="_blank">Lektion 5 Uppgift 3 Feedback</a></li>
                <li><a href="exercises/Lektion 5/uppgift4.php" target="_blank">Lektion 5 Uppgift 4</a></li>
                <li><a href="exercises/Lektion 5/uppgift4feedback.php" target="_blank">Lektion 5 Uppgift 4 Feedback</a></li>
                <li><a href="exercises/Lektion 5/uppgift5.php" target="_blank">Lektion 5 Uppgift 5</a></li>
                <li><a href="exercises/Lektion 5/uppgift5feedback.php" target="_blank">Lektion 5 Uppgift 5 Feedback</a></li>
                <li><a href="exercises/Lektion 5/uppgift6.php" target="_blank">Lektion 5 Uppgift 6</a></li>
                <li><a href="exercises/Lektion 5/uppgift6feedback.php" target="_blank">Lektion 5 Uppgift 6 Feedback</a></li>

                <li><a href="exercises/Lektion 6/timelib.php" target="_blank">Lektion 6 Timelib</a></li>
                <li><a href="exercises/Lektion 6/uppgift1date.php" target="_blank">Lektion 6 Uppgift 1 Date</a></li>
                <li><a href="exercises/Lektion 6/uppgift1file.php" target="_blank">Lektion 6 Uppgift 1 File</a></li>
                <li><a href="exercises/Lektion 6/uppgift2date.php" target="_blank">Lektion 6 Uppgift 2 Date</a></li>
                <li><a href="exercises/Lektion 6/uppgift2filepage1.php" target="_blank">Lektion 6 Uppgift 2 Filepage 1</a></li>
                <li><a href="exercises/Lektion 6/uppgift2filepage2.php" target="_blank">Lektion 6 Uppgift 2 Filepage 2</a></li>
                <li><a href="exercises/Lektion 6/uppgift2filepage3.php" target="_blank">Lektion 6 Uppgift 2 Filepage 3</a></li>
                <li><a href="exercises/Lektion 6/uppgift3date.php" target="_blank">Lektion 6 Uppgift 3 Date</a></li>
                <li><a href="exercises/Lektion 6/uppgift3file.php" target="_blank">Lektion 6 Uppgift 3 File</a></li>
                <li><a href="exercises/Lektion 6/uppgift4date.php" target="_blank">Lektion 6 Uppgift 4 Date</a></li>

                <li><a href="exercises/Lektion 7/uppgift1.php" target="_blank">Lektion 7 Uppgift 1</a></li>
                <li><a href="exercises/Lektion 7/uppgift2.php" target="_blank">Lektion 7 Uppgift 2</a></li>
                <li><a href="exercises/Lektion 7/uppgift3.php" target="_blank">Lektion 7 Uppgift 3</a></li>
                <li><a href="exercises/Lektion 7/uppgift4.php" target="_blank">Lektion 7 Uppgift 4</a></li>
                <li><a href="exercises/Lektion 7/uppgift5.php" target="_blank">Lektion 7 Uppgift 5</a></li>
                <li><a href="exercises/Lektion 7/uppgift6.php" target="_blank">Lektion 7 Uppgift 6</a></li>
                <li><a href="exercises/Lektion 7/uppgift7.php" target="_blank">Lektion 7 Uppgift 7</a></li>

                <li><a href="exercises/Lektion 8/uppgift1.php" target="_blank">Lektion 8 Uppgift 1</a></li>
                <li><a href="exercises/Lektion 8/uppgift2.php" target="_blank">Lektion 8 Uppgift 2</a></li>
                <li><a href="exercises/Lektion 8/uppgift3login.php" target="_blank">Lektion 8 Uppgift 3</a></li>
                <li><a href="exercises/Lektion 8/uppgift4.php" target="_blank">Lektion 8 Uppgift 4</a></li>
            </ul>
        </nav>
    </aside>

    <article class="justify border">

        <!-- Sidans/Dokumentets huvudsakliga innehåll -->
        <h1>Övningar i kursen</h1>

        <p>Här är en samlingssida för mina övningar i de olika kursmomenten.</p>

        <p>Skapa en ny sida varje gång du implementerar en ny övning. Då har du alltid
            ett kodexempel att gå tillbaka till. Du slipper komma ihåg de exakta konstruktionerna. Du har löst
            problemet en gång och du vet var du har lösningen. Perfekt.</p>

        <p>Källkoden till mina övningar och övriga delar till sidan,
            <a href="viewsource.php?dir=exercises">hittar du i denna katalogen</a>.</p>

    </article>
</div>

<?php include("incl/footer.php"); ?> 