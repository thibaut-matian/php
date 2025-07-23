<?php
$pageTitle = "Évaluation";
$pageCss = "assets/css/evaluation.css";
include "includes/header.php";

$evaluations = [
    "Module 1" => 8,
    "Module 2" => 7,
    "Module 3" => 6,
    "Module 4" => 7,
    "Module 5" => 6,
    "Module 6" => 8,
    "Module 7" => 7,
    "Module 8" => 7,
    "Module 9" => 6,
    "Module 10" => 6,
    "Module 11" => 5,
    "Module 12" => 6
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
