<?php  

$eleves = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ]
];

$totaux_matieres = [
    "maths" => 0,
    "francais" => 0,
    "anglais" => 0
];  

// Moyenne
$nombre_eleves = count($eleves);


foreach ($eleves as $prenom => $notes) {
    $somme = 0;
    $somme_matieres = count($notes);
    
foreach ($notes as $matiere => $note) {
        $somme += $note;
        $totaux_matieres[$matiere] += $note;
    }

    $moyenne = $somme / $somme_matieres;

// Appreciation 
    if ($moyenne < 10) {
        $appreciation = "Insuffisant";
    }   
    elseif ($moyenne < 12) {
        $appreciation = "Peut mieux faire";
    }
    elseif ($moyenne <= 15) {
        $appreciation = "Bon travail";
    } else {
        $appreciation = "Excellent";
    }

    echo "$prenom : moyenne = " . round($moyenne, 2) . "/20. Appréciation : $appreciation";
    echo "<br>";
}
echo "<br>";
// Moyenne par matière
foreach ($totaux_matieres as $matiere => $total) {
    $moyenne_matiere = $total / $nombre_eleves;
    echo "Moyenne en $matiere : " . round($moyenne_matiere, 2) . "/20";
    echo "<br>";
}
