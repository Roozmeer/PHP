<?php

for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo '<img src="img/aap/aap' . $i . '.jpg" style="border: 5px solid red;">';
    } else {
        echo '<img src="img/aap/aap' . $i . '.jpg" style="border: 5px solid green;">';
    }
};
