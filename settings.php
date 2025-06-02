<!-- settings.php -->
<?php
require_once 'session.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paramètres</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="app-header">
    <h2>Paramètres</h2>
    <a href="home.php" class="burger-menu">&larr;</a>
  </header>

  <main class="card-container">
    <div class="settings-card">
      <h3>Options utilisateur</h3>
      <ul>
        <li><label><input type="checkbox" checked disabled> Notifications activées</label></li>
        <li><label><input type="checkbox" disabled> Mode sombre (bientôt)</label></li>
      </ul>
      <h3>Sécurité</h3>
      <ul>
        <li><button disabled>Changer mot de passe (à venir)</button></li>
      </ul>
      <h3>Autres</h3>
      <ul>
        <li><a href="logout.php" class="logout-button">Se déconnecter</a></li>
      </ul>
    </div>
  </main>
</body>
</html>