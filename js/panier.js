function ajouterAuPanier(identifiantProduit) {
	// Récupérez les détails du produit en fonction de l'identifiantProduit
	var detailsProduit = getDetailsProduit(identifiantProduit);

	// Obtenez les articles du panier existants depuis localStorage
	var articlesPanier = localStorage.getItem("articlesPanier");
	articlesPanier = articlesPanier ? JSON.parse(articlesPanier) : [];

	// Vérifiez si le produit est déjà dans le panier
	var produitExistant = articlesPanier.find(function (article) {
		return article.id === identifiantProduit;
	});

	if (produitExistant) {
		// Si le produit existe déjà, augmentez simplement la quantité
		produitExistant.quantite += 1;
	} else {
		// Sinon, ajoutez un nouvel article au panier
		articlesPanier.push({
			id: identifiantProduit,
			nom: detailsProduit.nom,
			prix: detailsProduit.prix,
			quantite: 1,
		});
	}

	// Enregistrez les articles mis à jour dans localStorage
	localStorage.setItem("articlesPanier", JSON.stringify(articlesPanier));

	// Optionnel : vous pouvez rediriger l'utilisateur vers la page du panier
	window.location.href = "../pages/panier.html";
	afficherArticlesPanier();
}

function getDetailsProduit(identifiantProduit) {
	// Ajoutez une logique pour récupérer les détails du produit en fonction de l'identifiantProduit
	// Pour simplifier, vous pouvez coder en dur les détails ou les récupérer depuis un serveur
	switch (identifiantProduit) {
		case "pc1":
			return { nom: "PC Savana", prix: 1949.0 };
		case "pc2":
			return { nom: "PC Kraken", prix: 1399.99 };
		case "pc3":
			return { nom: "PC Atlas", prix: 1499.99 };
		case "pc4":
			return { nom: "PC Fractal-North", prix: 1899.99 };
		case "pc5":
			return { nom: "PC Tracer", prix: 5999.99 };
		case "pc6":
			return { nom: "PC Freezer", prix: 2999.99 };
		case "pc7":
			return { nom: "PC Orion", prix: 1199.99 };
		case "pc8":
			return { nom: "PC Omega", prix: 1349.0 };
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

	// Parcourez tous les articles du panier et affichez-les
	var sousTotal = 0;
	articlesPanier.forEach(function (article, index) {
		var ligne = corpsTableauPanier.insertRow();
		var cellule1 = ligne.insertCell(0);
		var cellule2 = ligne.insertCell(1);
		var cellule3 = ligne.insertCell(2);

		cellule1.innerHTML = article.nom;
		cellule2.innerHTML = article.prix.toFixed(2) + " €";
		cellule3.innerHTML = article.quantite;

		sousTotal += article.prix * article.quantite;

		// Créez un conteneur (div) pour les boutons
		var boutonsContainer = document.createElement("div");

		// Ajoutez un bouton de suppression avec un gestionnaire d'événements
		var boutonSupprimer = document.createElement("button");
		boutonSupprimer.innerHTML = "Supprimer";
		boutonSupprimer.className = "btn btn-danger btn-sm";
		boutonSupprimer.addEventListener("click", function () {
			supprimerArticle(index);
		});

		boutonsContainer.appendChild(boutonSupprimer);

		// Ajoutez un bouton d'ajout de quantité avec un gestionnaire d'événements
		var boutonAjouter = document.createElement("button");
		boutonAjouter.innerHTML = "+";
		boutonAjouter.className = "btn btn-primary btn-sm mx-2 mt-1";
		boutonAjouter.addEventListener("click", function () {
			ajouterQuantite(index);
		});

		boutonsContainer.appendChild(boutonAjouter);

		// Ajoutez le conteneur des boutons à la cellule
		ligne.insertCell(3).appendChild(boutonsContainer);
	});

	// Affichez le sous-total
	elementSousTotal.innerHTML = sousTotal.toFixed(2) + " €";
}

// Appelez la fonction pour afficher les articles du panier lorsque la page du panier est chargée
afficherArticlesPanier();

// Fonction pour supprimer un article du panier
function supprimerArticle(index) {
	// Obtenez les articles du panier depuis localStorage
	var articlesPanier = localStorage.getItem("articlesPanier");
	articlesPanier = articlesPanier ? JSON.parse(articlesPanier) : [];

	// Obtenez l'article en fonction de l'index
	var article = articlesPanier[index];

	// Décrémentez la quantité
	if (article.quantite > 1) {
		article.quantite -= 1;
	} else {
		// Si la quantité est égale à 1, supprimez l'article du panier
		articlesPanier.splice(index, 1);
	}

	// Enregistrez les articles mis à jour dans localStorage
	localStorage.setItem("articlesPanier", JSON.stringify(articlesPanier));

	// Mettez à jour l'affichage du panier
	afficherArticlesPanier();
}
// Ajoutez ceci à votre fonction de confirmation de commande (ajouterAuPanier par exemple)
function confirmerCommande() {
	// ... (votre code existant)

	// Affichez un popup de confirmation
	var confirmation = confirm("Confirmer la commande ?");

	// Si l'utilisateur clique sur OK dans le popup, vous pouvez procéder à la suite de votre logique
	if (confirmation) {
		// Votre logique ici, par exemple, rediriger l'utilisateur ou effectuer d'autres actions
		window.location.href = "../pages/confirmation.html";
	}
}

function ajouterQuantite(index) {
	// Obtenez les articles du panier depuis localStorage
	var articlesPanier = localStorage.getItem("articlesPanier");
	articlesPanier = articlesPanier ? JSON.parse(articlesPanier) : [];

	// Augmentez la quantité de l'article en fonction de l'index
	articlesPanier[index].quantite += 1;

	// Enregistrez les articles mis à jour dans localStorage
	localStorage.setItem("articlesPanier", JSON.stringify(articlesPanier));

	// Mettez à jour l'affichage du panier
	afficherArticlesPanier();
}

function afficherDetailsCommande() {
	var confirmationTableBody = document.getElementById("confirmation-tablebody");
	var confirmationSubtotal = document.getElementById("confirmation-subtotal");

	// Obtenez les articles du panier depuis localStorage
	var articlesPanier = localStorage.getItem("articlesPanier");
	articlesPanier = articlesPanier ? JSON.parse(articlesPanier) : [];

	// Effacez le contenu existant
	confirmationTableBody.innerHTML = "";

	var sousTotal = 0;

	// Parcourez les articles du panier pour afficher dans le tableau de confirmation
	articlesPanier.forEach(function (article) {
		var ligne = confirmationTableBody.insertRow();
		var cellule1 = ligne.insertCell(0);
		var cellule2 = ligne.insertCell(1);
		var cellule3 = ligne.insertCell(2);

		cellule1.innerHTML = article.nom;
		cellule2.innerHTML = article.prix.toFixed(2) + " €";
		cellule3.innerHTML = article.quantite;

		sousTotal += article.prix * article.quantite;
	});

	// Affichez le sous-total dans la page de confirmation
	confirmationSubtotal.innerHTML = sousTotal.toFixed(2);
}
