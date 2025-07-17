<?php

function afficherEtoile($nrb) {
    for ($i = 1; $i <= $nrb; $i++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 1; $i <= 5; $i++) {
    afficherEtoile($i);
}
?>