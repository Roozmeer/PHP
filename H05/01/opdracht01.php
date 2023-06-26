<?php
// print_r($_POST);

if (!empty($_POST["naam"])) {
    echo "Naam: " . $_POST["naam"] . "<br>";
} else {
    echo "Error 404 page not found";
}

if (!empty($_POST["adres"])) {
    echo "Adres: " . $_POST["adres"] . "<br>";
} else {
    echo "Error 404 page not found";
}

if (!empty($_POST["email"])) {
    echo "Email: " . $_POST["email"] . "<br>";
} else {
    echo "Error 404 page not found";
}


// echo "Naam: " . $_POST["naam"] . "<br>";
// echo "Adres: " . $_POST["adres"] . "<br>";
// echo "Email: " . $_POST["email"] . "<br>";
