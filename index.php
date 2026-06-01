<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escape Room</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <h1>Escape Room</h1>
  <p>Denk jij dat je het aankunt om uit onze escape room te ontsnappen? Test het vandaag nog!
  </p>
  <p>Klik hieronder om je team te maken en de room in te duiken!</p>
  <?php if (isset($_SESSION['username'])): ?>
    <p>Ingelogd als: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <a href="logout.php">Uitloggen</a>
  <?php else: ?>
    <a href="login.php">Inloggen</a>
    <a href="register.php">Registreren</a>
  <?php endif; ?>

<br><br>

<button><a href="./rooms/room_1.php">Klik hier voor een demonstratie van kamer 1</a></button>

  

  <button><a href="./rooms/room_1.php">Klik hier voor een demonstratie van kamer
      1</a></button>

</body>

</html>