<?php

$status = "en cours";
$message = match ($status) {
    "en cours" => "Votre demande est en cours de traitement.",
    "expédiée" => "Votre demande est en cours de livraison.",
    "annulée" => "Votre demande a été refusée.",
    "livrée" => "Votre demande a été livrée avec succès.",
    default => "Statut inconnu",
};
echo $message;
?>