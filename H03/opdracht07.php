<?php

$teams["spartelkuikens"] = 25;
$teams["waterbuffels"] = 32;
$teams["plonsmderin"] = 11;
$teams["Bommetje"] = 23;

foreach ($teams as $naam => $aantal) {

    $times = floor($aantal / 5);
    echo $naam . " ";
    for ($i = 0; $i < $times; $i++) {
        echo "<img src='img/zwem.jpg'>";
    }
    echo "<br>";
}
