<?php  

$moyenne = 10;
$sous = 0;

$eleves = [
    "Alice"  => 15,
    "Benoît" => 9,
    "Claire" => 18,
    "David"  => 11,
];
foreach ($eleves as $prenom => $note){
    echo "$prenom a obtenu $note/20";
    echo "<br>";
    if ($note >= $moyenne){
        $sous++;
    }
}
echo "<br>"; 
echo "$sous élèves ont eu la moyenne";