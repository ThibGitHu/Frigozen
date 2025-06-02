<!-- favorites.php -->
<?php
require_once 'session.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Favoris</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="assets/js/favorites.js"></script>
</head>
<body>
  <header class="app-header">
    <h2>Mes Favoris</h2>
    <a href="home.php" class="burger-menu">&larr;</a>
  </header>

  <main class="card-container" id="favoritesList">
    <!-- Les recettes favorites seront injectées ici -->
  </main>
</body>
</html>
