// Sélection du formulaire
const formulaire = document.querySelector("form");

// Fonction pour calculer et afficher le total
function calculerEtAfficherTotal() {
	// Récupération des valeurs des champs
	const cartemere = parseFloat(document.getElementById("carte-mere").value) || 0;
	const processeur = parseFloat(document.getElementById("processeur").value) || 0;
	const cartegraphique = parseFloat(document.getElementById("carte-graphique").value) || 0;
	const ram = parseFloat(document.getElementById("ram").value) || 0;
	const stockage = parseFloat(document.getElementById("stockage").value) || 0;
	const disquesup = parseFloat(document.getElementById("disque-sup").value) || 0;
	const boitier = parseFloat(document.getElementById("boitier").value) || 0;

	// Calcul de la somme des valeurs
	const total = cartemere + cartegraphique + processeur + ram + stockage + disquesup + boitier;
	console.log(total);

	// Affichage du résultat dans la balise <p id="resultat">
	const afficherResultat = document.getElementById("resultat");
	afficherResultat.textContent = "Prix total : " + total + " euros";
}

// Écouteurs d'événements sur les champs du formulaire
formulaire.addEventListener("input", calculerEtAfficherTotal);
