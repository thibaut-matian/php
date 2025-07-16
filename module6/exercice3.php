<?php

$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];

foreach ($produits as $produit){
    if ($produit["nom"]==="Casquette"){
        echo "Il reste ". $produit["stock"]. " casquettes en stock.";
        break;
    }
}

$produits[]= ["nom" => "Veste", "prix" =>40, "stock"=>25];

// Exemple de données stockées dans un tableau


echo "<table border='1'
    style 'border-collapse: collapse; width: 50%; margin: auto; text-align: center'>";
    echo "<tr><th>Produit</th><th>Prix</th><th>Stock</th><th>CA Potentiel</th></tr>";

    

foreach ($produits as $p) {
    $ca = $p["prix"] * $p["stock"];
    echo "<tr>
        <td>{$p['nom']}</td>
        <td>{$p['prix']}</td>
        <td>{$p['stock']}</td>
        <td>$ca</td>
    </tr>";
}
      




