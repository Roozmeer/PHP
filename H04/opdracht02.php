<?php
function deelbaar($getal)
{
    if ($getal % 3 == 0) {
        echo "true";
    } else {
        echo "false";
    }
}

deelbaar(8);
