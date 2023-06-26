<?php
$mail = $_POST['email'];
$password = $_POST['wachtwoord'];

if (login($mail, $password)) {
    echo "Welkom";
} else {
    echo "Sorry, geen toegang";
}

function login($email, $pass)
{
    if (
        $email == 'piet@worldonline.nl' && $pass == 'doetje123' ||
        $email == 'klaas@carpets.nl' && $pass == 'snoepje777' ||
        $email == 'truushendriks@wegweg.nl' && $pass == 'arkiearkie201'
    ) {
        return true;
    } else {
        return false;
    }
}
