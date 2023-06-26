<?php
session_start();
?>

<link href="style.css" rel="stylesheet">


<header>
    <?php include('header.php') ?>
</header>

<?php
if (isset($_SESSION["user"])) {
    echo "<h1 class='titel'>Welkom " . $_SESSION["user"] . ". Je hebt een " . $_SESSION["rol"] . " rol.</h1>";
} else {
    echo "<h1 class='titel'>u bent nog niet ingelogd</h1> <br> <button><a href='inloggen.php'>Nu inloggen</a></button>";
}
