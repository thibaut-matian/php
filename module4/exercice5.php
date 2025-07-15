<?php  

$size = "XL";
const TVA = 0.20;

switch ($size) {
    case "S":
        $prixHT = 10;
        break;
    case "M":
        $prixHT = 12;
        break;
    case "L":
        $prixHT = 14;
        break;
    case "XL":
        $prixHT = 16;
        break;
    default: 
    echo "Taille inconnue";
    exit();
}
    $prixTTC = $prixHT * (1 + TVA);
    echo "Le prix du t-shirt taille $size est de $prixTTC ";
?>
