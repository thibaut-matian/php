<?php

// Identifiants attendus
$identifiantEnregistre = 'admin';
$motdepasseHash = '$2y$10$8YJ7sUUnl.VUSfnQHzqmQOxvZkfm1ioni0VCK506dZvW3QWzeM6je'; // hash correspondant au mot de passe : "secret123"


$username=$_POST['username'] ?? "";
$password=$_POST['password'] ?? "";

if ($username === $identifiantEnregistre && password_verify($password,$motdepasseHash)){
    echo "<h2>Connexion reussite avec succès</h2>";
} else {
    echo "<h2>Connexion foire, veuillez recommencer</h2>";
}

