<?php

$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

function Moyenne($eleve) {
    $somme = 0;
    $Matieres = 0;

    foreach ($eleve as $note=> $valeur) {
        if ($note !== "prenom") {
            $somme += $valeur;
            $Matieres++;
        }
    }

    return $somme / $Matieres;
}

function Admis($moyenne){
    return $moyenne >= 10;
}

$eleveRecherche = "YANN";

$finalname = strtolower($eleveRecherche);
$firstletter = ucfirst($finalname);


foreach ($classe as $eleve) {
   
    if ($eleve["prenom"] === $firstletter){
        $prenom = $eleve["prenom"];
        $moyenne = Moyenne($eleve);
        $admission = Admis($moyenne) ? "Admis" : "Non admis";
        

    echo $prenom . ": moyenne = " . round($moyenne, 2) . "/20 - $admission<br>";
}
}
