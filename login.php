<?php
// Dylano Nietveld
// Loginpage
session_start();
require_once 'dbcon.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $db_connection->prepare($sql);
    $stmt->execute([':username' => $username]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: index.php");
        exit();
    } else {
        $error = "Gebruikersnaam of wachtwoord klopt niet";
    }
}
?>

<h1>Inloggen</h1>

<?php if (isset($error)) echo "<p>$error</p>"; ?>

<form method="post">
    <input type="text" name="username" placeholder="Gebruikersnaam" required><br><br>
    <input type="password" name="password" placeholder="Wachtwoord" required><br><br>

    <button type="submit" name="login">Inloggen</button>
</form>

<br>
<a href="register.php">Account aanmaken</a>