<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (strlen($password) < 6) {
        echo "<p style='color:red;'>Mot de passe trop court.</p>";
    } elseif ($password !== $confirm_password) {
        echo "<p style='color:red;'>Les deux mots de passe ne sont pas identiques.</p>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo "<p>Mot de passe chiffré : <strong>$hashed_password</strong></p>";
    }
}
?>