<?php
// OPDRACHT BUSREIS

$leeftijd = 12;
$prijs = 10;

if ($leeftijd > 65 || $leeftijd <= 12 && $leeftijd >= 3) {
    echo "De reis kost €" . $prijs / 2;
} else if ($leeftijd < 3) {
    echo "De reis kost €0";
} else {
    echo "De reis kost €" . $prijs;
}
