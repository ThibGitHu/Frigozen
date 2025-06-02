let currentRecipe = null;
let allRecipes = [];

// Chargement initial des recettes
fetch('recettes.json')
  .then(res => res.json())
  .then(data => {
    allRecipes = data;
  });

function toggleMenu() {
  document.getElementById('side-menu').classList.toggle('hidden');
}

function searchRecipe() {
  const input = document.getElementById('searchInput').value.toLowerCase();
  const match = allRecipes.find(r => r.ingredients.some(i => i.toLowerCase().includes(input)));

  if (match) {
    currentRecipe = match;
    renderRecipe(match);
  } else {
    document.getElementById('recipeCard').innerHTML = "<p>Aucune recette trouvée</p>";
  }
}

function renderRecipe(recipe) {
  const container = document.getElementById('recipeCard');
  container.innerHTML = `
    <div class="recipe-card">
      <img src="${recipe.image || 'default.jpg'}" alt="${recipe.titre}">
      <h3>${recipe.titre}</h3>
      <ul>${recipe.ingredients.map(i => `<li>${i}</li>`).join('')}</ul>
    </div>
  `;
}

function removeRecipe() {
  document.getElementById('recipeCard').innerHTML = '';
}

function reloadRecipe() {
  if (!currentRecipe) return;
  const similar = allRecipes.filter(r =>
    r.categorie === currentRecipe.categorie && r.titre !== currentRecipe.titre
  );
  if (similar.length) {
    const next = similar[Math.floor(Math.random() * similar.length)];
    currentRecipe = next;
    renderRecipe(next);
  }
}

function likeRecipe() {
  if (!currentRecipe) return;
  window.location.href = `recipe.php?id=${currentRecipe.id}`;
}

function saveFavorite() {
  if (!currentRecipe) return;
  let favs = JSON.parse(localStorage.getItem('favorites') || '[]');
  if (!favs.find(f => f.id === currentRecipe.id)) {
    favs.push(currentRecipe);
    localStorage.setItem('favorites', JSON.stringify(favs));
    alert('Ajouté aux favoris !');
  }
}
