<?php   

function CalculerImpot($revenu){
    $tranches= [
        [0,9999,0],
        [10000,19999,0.10],
        [20000,34999,0.18],
        [35000,49999,0.25],
        [50000, PHP_INT_MAX,0.35],
    ];

$impot=0;

foreach ($tranches as $tranche){
    $min=$tranche[0];
    $max=$tranche[1];
    $taux=$tranche[2];

    if ($revenu>$min){
        $imposable=min($revenu,$max) - $min;
        $impot += $imposable * $taux;
    }

    else {
        break;
    }
}
return $impot;
}     

    echo "Impôt sur 16000 € : " . round(CalculerImpot(16000)) . " €";
    echo "<br>";
    echo "Impôt sur 38000 € : " . round(CalculerImpot(38000)) . " €";
    echo "<br>";
    echo "Impôt sur 64000 € : " . round(CalculerImpot(64000)) . " € "; 