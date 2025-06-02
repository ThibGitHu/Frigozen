document.addEventListener('DOMContentLoaded', () => {
    const list = document.getElementById('favoritesList');
    const favorites = JSON.parse(localStorage.getItem('favorites') || '[]');
  
    if (!favorites.length) {
      list.innerHTML = '<p>Aucun favori pour le moment.</p>';
      return;
    }
  
    favorites.forEach(recipe => {
      const card = document.createElement('div');
      card.className = 'recipe-card';
      card.innerHTML = `
        <img src="${recipe.image || 'default.jpg'}" alt="${recipe.titre}">
        <h3>${recipe.titre}</h3>
        <button onclick="removeFavorite(${recipe.id})">🗑 Supprimer</button>
        <a href="recipe.php?id=${recipe.id}">Voir</a>
      `;
      list.appendChild(card);
    });
  });
  
  function removeFavorite(id) {
    let favs = JSON.parse(localStorage.getItem('favorites') || '[]');
    favs = favs.filter(f => f.id !== id);
    localStorage.setItem('favorites', JSON.stringify(favs));
    location.reload();
  }
  