<?php
$chaine = "12,5,abc,32,-7,42";


$tableau = explode(',', $chaine);

$valeurs_numeriques = [];

foreach ($tableau as $valeur) {
    if (is_numeric($valeur)) {
        $valeurs_numeriques[] = (int) $valeur;
    }
}
echo "<pre>";
print_r($valeurs_numeriques);
echo "</pre>";
if (!empty($valeurs_numeriques)) {
    $min = min($valeurs_numeriques);
    $max = max($valeurs_numeriques);

    echo "Le plus petit nombre est : $min\n";
    echo "Le plus grand nombre est : $max\n";
} else {
    echo "Aucune valeur numérique trouvée.\n";
}
?>