<?php
$villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];

echo $villes[4]="Marseille";
$villes[1]="Nice";
$villes[]= "Reims";
echo "<br>";
echo count($villes);
echo "<br>";

foreach ($villes as $villes){
    echo $villes."<br>";
}