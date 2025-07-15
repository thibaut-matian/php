<?php
$role = "admin"; 

if ($role === "admin") {
    echo "Accès complet autorisé";
} elseif ($role === "éditeur") {
    echo "Accès limité aux modifications";
} elseif ($role === "visiteur") {
    echo "Accès lecture seule";
} else {
    echo "Rôle inconnu";
}
?>