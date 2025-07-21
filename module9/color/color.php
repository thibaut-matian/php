<?php
$couleurs = [
    'red' => 'Rouge',
    'green' => 'Vert',
    'blue' => 'Bleu'
];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["couleur"])) {
    $couleur = $_POST["couleur"];

    if (array_key_exists($couleur, $couleurs)) {
        $nomCouleur = $couleurs[$couleur];
        echo "<h1 style='color: $couleur;'>Vous avez choisi la couleur $nomCouleur</h1>";
    } else {
        echo "<h1>Couleur invalide.</h1>";
    }
} else {
    echo "<h1>Aucune couleur sélectionnée.</h1>";
}
?>
