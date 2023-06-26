    <div class="nav">
        <a href="opdracht01.php">Home</a>
    </div>

    <div class="nav">
        <a href="profiel.php">Mijn Profiel</a>
    </div>

    <div class="nav">
        <a href="user-admin.php">Admin</a>
    </div>

    <div class='nav'>
        <?php
        if (isset($_SESSION["user"])) {
            echo "<a href='inloggen.php?loguit' id='loguit'>Uitloggen</a>";
        } else {
            echo '<a href="inloggen.php">Inloggen</a>';
        }
        ?>
    </div>