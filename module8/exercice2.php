<?php   

$form = [
  "nom" => "   ",
  "age" => "28",
  "email" => ""
];


if (isset($form["nom"]) && trim($form["nom"]) !== "") {
    echo "Le nom est valide.\n";
} else {
    echo "Le nom est invalide.\n";
}

if (isset($form["email"]) && trim($form["email"]) !== "") {
    echo "L'email est valide.\n";
} else {
    echo "L'email est invalide.\n";
}


if (isset($form["age"])) {
    $age = trim($form["age"]);
    if (is_numeric($age) && $age > 0) {
        echo "L'âge est valide.\n";
    } else {
        echo "L'âge est invalide.\n";
    }
} else {
    echo "Le champ 'age' est manquant.\n";
}


echo "<br>";
if (isset($form["age"])) {
    $age = trim($form["age"]);
    if (is_numeric($age) && $age > 0) {
        echo "L'âge est valide.\n";
    } else {
        echo "L'âge doit être un nombre supérieur à 0.\n";
    }
} else {
    echo "Le champ 'age' n'est pas défini.\n";
}

echo "<br>";


if (!isset($form["nom"]) || trim($form["nom"]) === "") {
    echo "Erreur : le nom est vide ou non défini.\n";
} else {
    echo "Nom : valide.\n";
}

if (!isset($form["email"]) || trim($form["email"]) === "") {
    echo "Erreur : l'email est vide ou non défini.\n";
} else {
    echo "Email : valide.\n";
}


if (!isset($form["age"]) || trim($form["age"]) === "") {
    echo "Erreur : l'âge est vide ou non défini.\n";
} elseif (!is_numeric($form["age"]) || $form["age"] <= 0) {
    echo "Erreur : l'âge doit être un nombre supérieur à 0.\n";
} else {
    echo "Âge : Ok\n";
}

?>
