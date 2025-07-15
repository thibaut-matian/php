<?php
const TAUX_TVA = 0.2;
$prixHT= 12;
$prixTTC = ($prixHT * TAUX_TVA) + $prixHT;
echo $prixTTC;
?>