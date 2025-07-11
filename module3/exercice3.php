<?php

$x = "true";
$y = "false";

$AND= ($x and $y);
echo "<br>";
echo  "x AND y donne " . ($x && $y ? 'true' : 'false');
$Or = ($x or $y);
echo "<br>";
echo "x OR y donne".  ($x || $y ? 'true' : 'false');
$Xor = ($x xor $y);
echo "<br>";
echo "x XOR y donne". (($x xor $y) ? 'true' : 'false');