<?php

$commandes = [
    ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob", "montant_ht" => 75,  "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David", "montant_ht" => 50,  "statut" => "en attente"]
];

define("TVA",0.20);

$ca_ht = 0;
$ca_ttc = 0;
$impayees = 0;




foreach ($commandes as $commande ) {
    $client = $commande["client"];
    $montant_ht = $commande["montant_ht"];
    $ttc = $montant_ht * (1+TVA);
    $statut = $commande["statut"];

    echo "Commande de $client : $montant_ht HT".  ", $ttc € TTC " . "- $statut";
    echo "<br>";
    $ca_ht += $montant_ht;
    $ca_ttc += $ttc;

    if ($statut === "en attente") {
        $impayees+= $montant_ht;
    }
}

   $pourcentage_impayes = ($impayees / $ca_ht) * 100;
echo "<br>";
echo "Le chiffre d'affaires HT est de $ca_ht €";
echo "<br>";
echo "Le chiffre d'affaires TTC est de $ca_ttc €";
echo "<br>";
echo "Le montant des impayées est de $impayees €";
echo "<br>";
echo "Le pourcentage d'impayés est de " . round($pourcentage_impayes, 2) . "%";
echo "<br>";