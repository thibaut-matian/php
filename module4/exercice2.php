<?php

$jour = "samedi";
switch ($jour) {
    case "lundi":
    case "mardi":
    case "mercredi":
    case "jeudi":
    case "vendredi":
        echo "Jour ouvré";
        break;
    case "samedi":
    case "dimanche":
        echo "Jour non ouvré";
        break;
    }
?>