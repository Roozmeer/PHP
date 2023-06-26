<?php

session_start();

$db_user = 'schooluser';
$pass = '26-04-2004';
$nameButton = 'Submit';

$dbh = new PDO('mysql:host=localhost;dbname=phpschool;port=3306', $db_user, $pass);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>login formulier</title>
</head>

<body>
    <header>
        <?php include('header.php') ?>
    </header>

    <div>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <input type="text" name="naam" placeholder="Naam"><br>
            <input type="password" name="wachtwoord" placeholder="Wachtwoord"><br>
            <button type="submit"><?php echo $nameButton ?></button>
        </form>
    </div>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['naam'])) {
        $email = $_POST['naam'];
    }

    if (isset($_POST['wachtwoord'])) {
        $wachtwoord = $_POST['wachtwoord'];
    }

    $stmt = $dbh->prepare("SELECT naam, wachtwoord, rol FROM h7inlog WHERE naam = ? AND wachtwoord = ?");
    $stmt->execute([$email, $wachtwoord]);
    $result = $stmt->fetch();
    if (empty($result)) {
        echo "Naam of wachtwoord komt niet overeen met de database";
    } else {
        $_SESSION["user"] = $_POST["naam"];
        $_SESSION["rol"] = $result["rol"];
        // print_r($_SESSION);
        header('location: profiel.php');
    }
}

if (isset($_GET["loguit"])) {
    echo "U bent uitgelogd";
}


?>