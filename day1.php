<?php

//variabelennamen beginnen met een dollarteken $
$nameOne = 'Piet';
$nameTwo = 'Jorn';
$names = ['Piet', 'Jorn']; //zo maak je een array; een variabele waar je meerdere waarden in kan stoppen

// echo $nameOne . "<br>";
// echo $nameTwo;

$names[] = 'Rick';
$names[] = 'Joris';
$names[] = 'Joey';
$names[] = 'Judith';

// echo $names[0];

// print_r($names);

//met de . voeg je 2 strings aan elkaar

// for($i = 0; $i < 5; $i++)
// {
// 	echo $names[$i]."<br>";
// }

// for($i = 0; $i < count($names); $i++)
// {
// 	echo $names[$i]."<br>";
// }

$loveSport = 6;

if($loveSport === 6){
	echo 'ga kickboksen';
} else if($loveSort === 5){
	echo 'ga ballet doen!';
} else{
	echo 'ga mma doen';
}
