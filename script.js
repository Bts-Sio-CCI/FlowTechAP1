// script.js

function ajouterAuPanier(identifiantProduit) {
	// Récupérez les détails du produit en fonction de l'identifiantProduit
	var detailsProduit = getDetailsProduit(identifiantProduit);

	// Obtenez les articles du panier existants depuis localStorage
	var articlesPanier = localStorage.getItem("articlesPanier");
	articlesPanier = articlesPanier ? JSON.parse(articlesPanier) : [];

	// Ajoutez le nouvel article au panier
	articlesPanier.push({
		id: identifiantProduit,
		nom: detailsProduit.nom,
		prix: detailsProduit.prix,
		quantite: 1,
	});

	// Enregistrez les articles mis à jour dans localStorage
	localStorage.setItem("articlesPanier", JSON.stringify(articlesPanier));

	// Optionnel : vous pouvez rediriger l'utilisateur vers la page du panier
	window.location.href = "../pages/panier.html";
}

function getDetailsProduit(identifiantProduit) {
	// Ajoutez une logique pour récupérer les détails du produit en fonction de l'identifiantProduit
	// Pour simplifier, vous pouvez coder en dur les détails ou les récupérer depuis un serveur
	switch (identifiantProduit) {
		case "pc1":
			return { nom: "PC RTX 4070ti", prix: 1949.0 };
		// Ajoutez des cas similaires pour les autres produits
		case "pc2":
			return { nom: "PC RTX 4070ti", prix: 1949.0 };
		case "pc3":
			return { nom: "PC RTX 4050", prix: 1.399 };
		case "pc4":
			return { nom: "PC RTX 4070ti", prix: 1949.0 };
		case "pc5":
			return { nom: "PC RTX 4070ti", prix: 1949.0 };
		case "pc6":
			return { nom: "PC RTX 4070ti", prix: 1949.0 };
		default:
			return { nom: "Produit inconnu", prix: 0.0 };
	}
}

// script.js

// Fonction pour afficher les articles du panier sur la page du panier
function afficherArticlesPanier() {
	var corpsTableauPanier = document.getElementById("cart-tablebody");
	var elementSousTotal = document.getElementById("subTotal");

	// Obtenez les articles du panier depuis localStorage
	var articlesPanier = localStorage.getItem("articlesPanier");
	articlesPanier = articlesPanier ? JSON.parse(articlesPanier) : [];

	// Effacez le contenu existant
	corpsTableauPanier.innerHTML = "";

	// Parcourez les articles du panier et affichez-les
	var sousTotal = 0;
	articlesPanier.forEach(function (article) {
		var ligne = corpsTableauPanier.insertRow();
		var cellule1 = ligne.insertCell(0);
		var cellule2 = ligne.insertCell(1);
		var cellule3 = ligne.insertCell(2);

		cellule1.innerHTML = article.nom;
		cellule2.innerHTML = article.prix.toFixed(2) + " €";
		cellule3.innerHTML = article.quantite;

		sousTotal += article.prix * article.quantite;
	});

	// Affichez le sous-total
	elementSousTotal.innerHTML = sousTotal.toFixed(2) + " €";
}

// Appelez la fonction pour afficher les articles du panier lorsque la page du panier est chargée
afficherArticlesPanier();
