<?php
$pageTitle = "Évaluation";
$pageCss = "css/evaluation.css";
include "includes/header.php";

$evaluations = [
    "Module 1" => 8,
    "Module 2" => 7,
    "Module 3" => 6,
    "Module 4" => 7,
    "Module 5" => 8,
    "Module 6" => 7,
    "Module 7" => 6,
    "Module 8" => 7,
    "Module 9" => 8,
    "Module 10" => 7,
    "Module 11" => 6,
    "Module 12" => 7
    
];
?>

<h2>Auto-évaluation</h2>
<table>
    <thead>
        <tr>
            <th>Module</th>
            <th>Note (1 à 10)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($evaluations as $module => $note): ?>
        <tr>
            <td><?= htmlspecialchars($module) ?></td>
            <td><?= htmlspecialchars($note) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "includes/footer.php"; ?>
