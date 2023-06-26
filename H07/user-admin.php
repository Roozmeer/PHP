 <?php
    session_start();
    ?>

 <link href="style.css" rel="stylesheet">

 <header>
     <?php include('header.php') ?>
 </header>

 <?php

    if (isset($_SESSION["user"]) && isset($_SESSION["rol"]) && ($_SESSION["rol"] == "Admin")) {
        echo "welkom op de admin page " . $_SESSION["user"] . "<br>";
    } else {
        echo "<h1 class='titel'>Toegang geweigerd. Onvoldoende rechten.</h1> <br> <button><a href='inloggen.php?loguit' id='loguit'>Uitloggen</a></button>";
    }

    // print_r($_SESSION);

    ?>