<?php
$modules = [
    "Module 1" => "Présentation de PHP",
    "Module 2" => "Syntaxe de base",
    "Module 3" => "Variables et types",
    "Module 4" => "Conditions et boucles"
];
?>

<h2>Modules PHP</h2>
<ul>
<?php foreach ($modules as $num => $desc): ?>
    <li><strong><?= htmlspecialchars($num) ?> :</strong> <?= htmlspecialchars($desc) ?></li>
<?php endforeach; ?>
</ul>
