<?php
$pageTitle = "Modules";
$pageCss = "assets/css/modules.css";
include "includes/header.php";

$modules = [
    "Module 1" => [
        "Présentation de PHP",
        "Historique",
        "Fonctionnement serveur"
    ],
    "Module 2" => [
        "Variables",
        "Types de données",
        "Constantes"
    ],
    "Module 3" => [
        "Opérateurs",
        "Manipulation"
    ],
    "Module 4" => [
        "Conditions (if, else)",
        "Operateur ternaire",
        "MATCH"
    ],
    "Module 5" => [
       "Boucles (while,do...while,for)",    
       "Boucles infinies"
    ],
    "Module 6" => [
        "Tableaux (indexé, associatif)",
        "Manipulation (foreach)"
    ],
    "Module 7" => [
        "Fonctions",
        "Manipulation"
    ],
    "Module 8" => [
       "Retour sur fonctions",
       "Manipulation"
    ],
    "Module 9" => [
       "Comprendre superglobales",
       "Manipulation avec formulaire HTML",
       "Traiter des données via methodes GET et POST",
       "Sécuriser et valider les données reçues"
    ],
    "Module 10" => [
        "Sessions",
        "Manipulation"
    ],
    "Module 11" => [
       "WIP"
    ],
    "Module 12" => [
       "Organiser son code",
       "Organiser son template",
       "Manipulation"
    ]
];
?>
<body>
<h2>Modules PHP</h2>
<ul>
    <?php foreach ($modules as $titre => $contenus): ?>
        <li>
            <strong><?= htmlspecialchars($titre) ?> :</strong>
            <ul>
                <?php foreach ($contenus as $sujet): ?>
                    <li><?= htmlspecialchars($sujet) ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>
</body>
<?php include "includes/footer.php"; ?>
