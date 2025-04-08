// Fonction pour ajouter ou retirer un produit des favoris
function addToFavorites(productId, productName, productImage, productPrice) {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

    // Vérifier si le produit est déjà dans les favoris
    let existingProduct = favorites.find(product => product.id === productId);

    if (existingProduct) {
        // Si le produit est déjà dans les favoris, on le retire
        favorites = favorites.filter(product => product.id !== productId);

        // Affichage d'un message d'alerte de suppression
        alert(`${productName} a été retiré des favoris.`);

    } else {
        // Sinon, on l'ajoute aux favoris
        favorites.push({
            id: productId,
            name: productName,
            image: productImage,
            price: productPrice
        });

        // Afficher une alerte
        alert(`${productName} a été ajouté aux favoris.`);
        

    }

    // Sauvegarder les nouveaux favoris dans localStorage
    localStorage.setItem('favorites', JSON.stringify(favorites));

    // Rafraîchir la page des favoris pour afficher les changements
    loadFavorites();
}

// Fonction pour charger les favoris
function loadFavorites() {
    const favoritesList = document.getElementById('favorites-list');
    const favorites = JSON.parse(localStorage.getItem('favorites')) || [];

    // Si il n'y a pas de favoris
    if (favorites.length === 0) {
        favoritesList.innerHTML = "<p>Votre liste de favoris est vide.</p>";
    } else {
        favoritesList.innerHTML = ''; // Vider les favoris affichés
        favorites.forEach(product => {
            const productElement = document.createElement('div');
            productElement.classList.add('card');
            
            productElement.innerHTML = `
                <img loading="lazy" alt="${product.name}" src="${product.image}" style="width: 66;height: auto;">
                <h2>${product.name}</h2>
                <p style="color: red; font-weight: bold;">${product.price}</p>
                <button onclick="addToFavorites('${product.id}', '${product.name}', '${product.image}', '${product.price}')">
                    Retirer des favoris
                </button>
            `;
            favoritesList.appendChild(productElement);
        });
    }
}

// Charger les favoris au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    loadFavorites();
});
