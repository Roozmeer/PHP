<?php
function omreken($Celsius)
{
    $Fahrenheit = $Celsius * 1.8 + 32;
    echo $Celsius . " C = " . $Fahrenheit . " F";
}

omreken(27);
