<?php
include("incl/config.php");

$title = "Webbserv1 :Start";
$pageId = "start";
$pageStyle = '
figure { 
 border-radius: 10px;
 border-color:#333;
 box-shadow: 10px 10px 5px #888;
}
';

include("incl/header.php");

?>


<!-- sidans huvudinnehåll  -->
<div id="content">
    <article class="justify border">
        <h1>Start</h1>
        <figure class="right top">
            <img src="img/jagohelge.jpg" alt="Simon o helge">
            <figcaption>
                <p>Simon med kompisen Helge</p>
            </figcaption>
        </figure>
        <p>Hej och välkommen till Simons samlingssida i kursen
            webbserverprogrammering 1.
        </p>

    </article>
</div>

<?php include("incl/footer.php"); ?>