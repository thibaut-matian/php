

<?php
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    echo "Bienvenue ". $nom." ! ";
} else {
    $nom = '';
    echo "Erreur de vide.";

}