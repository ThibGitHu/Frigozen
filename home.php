<!-- home.php -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'session.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="assets/js/app.js"></script>
</head>
<body class="app-body">
  <header class="app-header">
    <h2 class="welcome-text">Salut, <?php echo htmlspecialchars($_SESSION['user']); ?> !</h2>
    <button class="burger-menu" onclick="toggleMenu()">&#9776;</button>
  </header>

  <div id="side-menu" class="side-menu hidden">
    <a href="account.php">Profil</a>
    <a href="settings.php">Paramètres</a>
    <a href="favorites.php">Favoris</a>
    <a href="logout.php">Se déconnecter</a>
  </div>

  <main class="search-section">
    <input type="text" id="searchInput" placeholder="Ex: pâtes, carottes...">
    <button onclick="searchRecipe()">Rechercher</button>
  </main>

  <section id="recipeCard" class="card-container">
    <!-- Carte recette injectée dynamiquement ici -->
  </section>

  <nav class="card-actions">
    <button class="btn gray" onclick="removeRecipe()">&#10006;</button>
    <button class="btn yellow" onclick="reloadRecipe()">↻</button>
    <button class="btn red" onclick="likeRecipe()">♥</button>
    <button class="btn blue" onclick="saveFavorite()">★</button>
  </nav>
</body>
</html>