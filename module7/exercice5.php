<?php   

function afficherNombres($debut, $fin,$type) {
    for ($i = $debut; $i <= $fin; $i++) {

        
        if ($type === "pair" && $i % 2 == 0) {
            echo $i . "<br>";
        }

        
        elseif ($type === "impair" && $i % 2 != 0) {
            echo $i . "<br>";
        }
    }
}

echo "nombres pairs de 7 à 99 : ";
afficherNombres(7,99,"pair");
echo "<br>";

echo "nombres de 59 à 169 : ";
afficherNombres(59,169,"impair");
echo "<br>";