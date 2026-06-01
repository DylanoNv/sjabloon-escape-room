<?php
// Dylano Nietveld
// Registerpage
session_start();
require_once 'dbcon.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password)
            VALUES (:username, :email, :password)";
    $stmt = $db_connection->prepare($sql);

    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':password' => $password
    ]);

    header("Location: login.php");
    exit();
}
?>

<h1>Registreren</h1>

<form method="post">
    <input type="text" name="username" placeholder="Gebruikersnaam" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Wachtwoord" required><br><br>

    <button type="submit" name="register">Account aanmaken</button>
</form>

<br>
<a href="login.php">Ik heb al een account</a>