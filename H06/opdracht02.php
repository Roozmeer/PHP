<?php

$user = 'schooluser';
$pass = '26-04-2004';
$nameButton = 'Submit';

$dbh = new PDO('mysql:host=localhost;dbname=phpschool;port=3306', $user, $pass);

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login formulier</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord"><br>
        <button type="submit"><?php echo $nameButton ?></button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }

        if (isset($_POST['wachtwoord'])) {
            $wachtwoord = $_POST['wachtwoord'];
        }

        $stmt = $dbh->prepare("SELECT email, wachtwoord FROM opdracht WHERE email = ? AND wachtwoord = ?");
        $stmt->execute([$email, $wachtwoord]);
        $result = $stmt->fetch();
        if (empty($result)) {
            echo "Sorry, geen toegang!";
        } else {
            echo "Welkom";
        }
    }

    ?>
</body>

</html>