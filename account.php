<!-- account.php -->
<?php
require_once 'session.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Compte</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="app-header">
    <h2>Mon Compte</h2>
    <a href="home.php" class="burger-menu">&larr;</a>
  </header>

  <main class="card-container">
    <div class="profile-card">
      <img src="assets/img/avatar.png" alt="Avatar" class="avatar">
      <h3>Nom d'utilisateur :</h3>
      <p><?php echo htmlspecialchars($_SESSION['user']); ?></p>
      <h3>Mot de passe :</h3>
      <p>••••••••</p>
    </div>
  </main>
</body>
</html>
