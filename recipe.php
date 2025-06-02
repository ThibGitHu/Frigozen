<!-- recipe.php -->
<?php
require_once 'session.php';

$recipes = json_decode(file_get_contents('recettes.json'), true);
$id = $_GET['id'] ?? null;
$current = null;

foreach ($recipes as $r) {
    if ($r['id'] == $id) {
        $current = $r;
        break;
    }
}

if (!$current) {
    echo "<p>Recette non trouvée</p>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($current['titre']); ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="app-header">
    <h2><?php echo htmlspecialchars($current['titre']); ?></h2>
    <a href="home.php" class="burger-menu">&larr;</a>
  </header>

  <main class="card-container">
    <div class="recipe-card">
      <img src="<?php echo htmlspecialchars($current['image']); ?>" alt="<?php echo htmlspecialchars($current['titre']); ?>">
      <h3>Ingrédients</h3>
      <ul>
        <?php foreach ($current['ingredients'] as $ingredient): ?>
          <li><?php echo htmlspecialchars($ingredient); ?></li>
        <?php endforeach; ?>
      </ul>
      <h3>Instructions</h3>
      <p>Préparez tous les ingrédients. Faites cuire selon la recette. Servez chaud.</p>
    </div>
  </main>
</body>
</html>
