<?php   

function CalculerMul($nombre){
  for ($i = 1; $i <= 10; $i++) {
    echo "$nombre x $i = ". ($nombre * $i);
    echo "<br>";
   
  }
}

CalculerMul(7);