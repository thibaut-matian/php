<?php 
$a = "5 ";
$b = "10";
$c = "3";

$Ajoute = ($a += $b);
echo "<br>";
echo "l'ajout de a + b donne $Ajoute";
$Multiple = ($b *= $c);
echo "<br>";
echo "le multiple de b et c donne $Multiple";
$Divise = ($b /= $a);
echo "<br>";
echo "la division de b et a donne $Divise";
$Soustrait = ($c -= $b);
echo "<br>";
echo "la soustraction de c et b donne $Soustrait";
$Reste = ($b %= $c);
echo "<br>";
echo "le reste de b et c donne $Reste";