<!-- 
    HTML
    - 4 pagina's
      - home pagina !!(opdracht01.php)!!
      - inlog form !!(inloggen.php)!!
      - pagina wanneer ingelogd !!(profiel.php)!!
      - administrator pagina !!(user-admin.php)!!
    - header (insert met php) !!(header.php)!!
      - inlog knop
      - uitlog knop
      - link naar administrator pagina
    PHP
    - connectie db ✔
    - toevoegen aan db ✔
    - sessie starten (cookies) ✔
    - niet succesvol inloggen -> melding op inlog form pagina ✔
    - succesvol inloggen -> rol toewijzen
      - rol zichtbaar op pagina
      - administrator rol
        - nodig om administrator pagina te kunnen bezoeken
      - gebruiker rol
        - kan niet de administrator pagina bezoeken
        - melding -> onvoldoende rechten
    - uitloggen
 -->
<?php

session_start();


?>

<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>H07 Opdracht 01</title>

</head>

<body>

  <header>
    <?php include('header.php') ?>
  </header>

  <div class="titel">
    <h1>Test website</h1>
  </div>
  <div>
    <p>Dit is een website test. Klik nu op inloggen</p>
  </div>

</body>

</html>