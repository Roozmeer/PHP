<?php

//Maak twee variabelen genaamd numberOne en numberTwo en geef er de waarde respectievelijk 5 en 12 aan.
$numberOne = 5;
$numberTwo = 12;

//Tel [de waarde van] beide variabelen bij elkaar op en stop deze in een nieuwe variabele genaamd sum.
$sum = $numberOne + $numberTwo;

//Print de waarde van de variabele sum op het scherm.
// echo $sum;

//Print de waarde van de variable sum tien keer op het scherm.
// for($i = 0; $i < 10; $i++){
// 	echo $sum . "<br>";
// }

//Maak een nieuwe variabele aan genaamd numbers (datatype array) en stop daar de waarden 5, 12, 15, 2, 5 en 8 in.
$numbers = [5, 12, 15, 2, 5, 8];

//Print alle waarden van de array onder elkaar op het scherm.

// for($i = 0; $i < count($numbers); $i++){
// 	echo $numbers[$i] . "<br>";
// }

// print_r($numbers);

//Voeg drie waarden (13, 14, 2) toe aan de array nadat je de array al hebt gemaakt.
$numbers[] = 13;
$numbers[] = 14;
$numbers[] = 2;

//Print alleen de waarden van de array op het scherm die groter zijn dan 10.
// for($i = 0; $i < count($numbers); $i++){
// 	if($numbers[$i] > 10){
// 		echo $numbers[$i] . "<br>";
// 	}
// }

//Print alleen de waarden van de array op het scherm die oneven zijn.
// for($i = 0; $i < count($numbers); $i++){
// 	if($numbers[$i] % 2 != 0){
// 		echo $numbers[$i] . "<br>";
// 	} 
// }

//Maak van bovenstaande opdracht een functie die één parameter heeft (de array) en één resultaat teruggeeft (de som van de array).
// $sumArray = 0;

// for($i = 0; $i < count($numbers); $i++){
// 	$sum = $sum + $numbers[$i];
// }

// echo $sum;
