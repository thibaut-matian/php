<?php
$a = "5";
$b = "10";
$Egal= ($a == $b);
echo "<br>";
echo "a == b donne". ($a==$b ? 'true':'false');
$Identique = ($a === $b);
echo "<br>";
echo "a === b donne". ($a===$b ? 'true':'false');
$Different = ($a != $b);
echo "<br>";
echo "a != b donne". ($a!=$b ? 'true': 'false');
$Autre = ($a <> $b);
echo "<br>";
echo "a <> b donne". ($a<>$b ? 'true': 'false');
$Autres = ($a !== $b);
echo "<br>";
echo "a !== b donne". ($a!==$b ? 'true':'false');
$Supp = ($a > $b);
echo "<br>";
echo "a > b donne". ($a>$b ? 'true': 'false');
$Infe = ($a<$b);
echo "<br>";
echo "a < b donne". ($a>$b ? 'true': 'false');
$SuppEg = ($a>=$b);
echo "<br>";
echo "a >= b donen". ($a>$b ? 'true': 'false');
$InfEg = ($a<=$b);
echo "<br>";
echo "a <= b donne". ($a>$b ? 'true': 'false');
$Combine = ($a<=>$b);
echo "<br>";
echo "a <=> b donne". ($a>$b ? 'true': 'false');
