<?php

session_start();

if (!isset($_SESSION['username'])){
    header ('Location: login.php');
    exit;
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
    <h2>Bienvenue <?= $username ?>, vous avez le rôle <?= $role ?>.</h2>   
    <form method="POST"action="logout.php">
        <button type="submit">Déconnexion</button>

    </form>
</body>
</html>