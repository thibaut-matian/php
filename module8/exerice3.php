<?php 

$panier = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";


$valeur= explode(",",$panier);

$produits_route=[];

foreach ($valeur as $val) {
    $valeur = explode(":", $val);

    if (count($valeur) == 2) {
        $name = strtoupper(trim($valeur[0]));
        $prix = trim($valeur[1]);

        if (is_numeric($prix)) {
            $produits_route[$name]=(float)$prix;
        }
   }
}

var_dump($produits_route);

$nb_valides=count($produits_route);

$total=array_sum($produits_route);
/*$total_dec=round($total,2);*/
$total_dec=number_format($total,2,',',' ');

echo "Le nombre total de produits valides est $nb_valides." ;
echo "<br>";
echo "Le prix total du panier est $total_dec." ;




?>



