<?php

session_start();

$users = [
    'alice' => ['password' => '$2y$10$vf68y2j7JB3sz3OmFQe3vuxsoBrQuNBD9j59uIVnJqJ5TwX1xbPi2', 'role' => 'admin'],
    'bob'   => ['password' => '$2y$10$J/oJemQ34Non4rB3Gf6OeOSuFablci7XfXOXc3u1kS9c99u70.E2y', 'role' => 'editor'],
    'caroline' => ['password' => '$2y$10$S/YwX4j2U62ekgqpqOgZHOekkAqshyTnxS8gz3aejYe4OM35P4d2y', 'role' => 'user'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


    $username=trim(htmlspecialchars($_POST['username'])) ?? "";
    $password=$_POST['password'] ?? "";

   if (isset($users[$username]["password"])) {
        if (password_verify($password, $users[$username]['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $users[$username]['role'];
            header('Location: dashboard.php');
            exit;
        }
    } else{
        header('Location: failed.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css">
    <title>Connexion</title>
</head>
<body>
    <form method="POST" class="login-form">
    <h2>Connexion</h2>
    <label for="username">Identifiant :</label>
    <input type="text" name="username" >
    <label for="password">Mot de passe :</label>
    <input type="password" name="password">
    <button type="submit">Se connecter</button>
</form>
</body>
</html>
