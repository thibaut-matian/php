<?php

$role = "admin";

switch ($role) { 
    case "admin":
        echo "Accès complet autorisé";
        break;

    case "éditeur":
        echo "Accès limité aux modifications";
        break;  
    case "visiteur":
        echo "Accès lecture seule";
        break;      
    default:
        echo "Rôle inconnu";
        break;
}
?>

    