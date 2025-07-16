<?php 
$temperatures = [30, 32, 34, 30, 35, 34, 31];

// Calcule de la moyenne
$sum = 0;
$somme = 0;

foreach ($temperatures as $temp){
    $sum += $temp;
    $somme++;
}

$moyenne = $sum / $somme;
 echo " La temperature moyenne des 7 dernies jours est de ". round ($moyenne,2)."°C";
 echo "<br>";

//Affiche le nombre de relevés

echo "Nombre de relevés : $somme";

