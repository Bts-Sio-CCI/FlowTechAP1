<?php
// Vérifier si l'utilisateur est déjà connecté
session_start();
if (isset($_SESSION['email'])) {
	// Rediriger l'utilisateur vers la page avec ses données personnelles
	header('Location: /pages/profil.php');
	exit;
}

if (isset($_POST['submit'])) { // Verifie que le bouton submit soit cliqué
	// Récupérer les valeurs des champs
	$nom = $_REQUEST['nom'];
	$prenom = $_REQUEST['prenom'];
	$email = $_REQUEST['email'];
	$telephone = $_REQUEST['telephone'];
	$motdepasse = $_REQUEST['motdepasse'];

	// Vérification des champs et envoi des messages d'erreur
	$error = "";
	if (empty($_REQUEST['nom'])) {
		$error .= "Le champ nom est manquant.<br>";
	}
	if (empty($_REQUEST['prenom'])) {
		$error .= "Le champ prénom est manquant.<br>";
	}
	if (empty($_REQUEST['email'])) {
		$error .= "Le champ email est manquant.<br>";
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email) > 5) {
		$error .= "Le champ email n'est pas valide.<br>";
	}
	if (empty($_REQUEST['telephone'])) {
		$error .= "Le champ telephone est manquant.<br>";
	}
	if (empty($_REQUEST['motdepasse'])) {
		$error .= "Le champ mot de passe est manquant.<br>";
	}

	// Identifiants BDD
	$servername = "nc231.myd.infomaniak.com";
	$username = "nc231_lucas";
	$password = "Lucas123";
	$dbname = "nc231_flowtech";

	// Connection à la BDD avec les identifiants définis précédemment
	$con = mysqli_connect($servername, $username, $password, $dbname);

	// Verifie que la connection soit bien établie
	if (!$con) {
		die("Connexion échouée!" . mysqli_connect_error());
	}

	// Définir le fuseau horaire
	//date_default_timezone_set('Europe/Paris');
	// Récupérer la date du jour
	//$today = date('Y-m-d');

	// Ajout des infroamtions dans la table si pas d'erreur
	if ($error == "") {
		$sql = "INSERT INTO utilisateurs (nom, prenom, email, telephone, motdepasse) VALUES ('$nom', '$prenom', '$email', '$telephone', '$motdepasse')";
		if (mysqli_query($con, $sql)) {
			// Si l'tuilisateur est inscrit, on récupère l'ID qui lui est assigné
			$query = "SELECT id FROM utilisateurs WHERE email='$email'";
			$result = mysqli_query($con, $query);
			$result2 = mysqli_fetch_assoc($result);
			extract($result2);
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $email;
			$_SESSION['nom'] = $nom;
			$_SESSION['prenom'] = $prenom;
			header("Location: /pages/profil.php");
			exit();
			// Sinon affiche message d'erreur
		} else {
			$error .= "Erreur: " . $sql . "<br>" . mysqli_error($con);
		} // Fermeture de la connection mysqli_close($con); 
	}
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FlowTech - Inscription</title>
	<meta name="description" content="FlowTech, surement les meilleurs PC du marché!" />
	<link rel="icon" type="image/x-icon" href="/img/logos/logo-min-rounded.png" />
	<!-- CSS CUSTOM + BOOTSTRAP -->
	<link href="../css/custom.css" rel="stylesheet" />
	<!-- BOOTSTRAP ICONS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
</head>

<body class="bg-dark">
	<main class="container text-center">
		<div class="row justify-content-md-center justify-text-left align-items-center min-vh-100">
			<form id="form-register" action="" method="POST" class="col-md-6 col-lg-5 col-xl-4">
				<!-- LOGO -->
				<a href="/index.php"><img class="mb-4" src="/img/logos/logo-min-rounded.png" alt="" width="72" height="72" /></a>
				<h2 class="mb-5 display-5 text-center text-light">Inscription</h2>
				<div class="row">
					<!-- Prénom -->
					<div class="col">
						<div class="form-floating">
							<input type="text" class="form-control rounded-4 border-flowtech border-3 p-3 text-light bg-dark" id="prenom" placeholder="John" name="prenom" />
						</div>
					</div>
					<!-- Nom -->
					<div class="col">
						<div class="form-floating mb-3">
							<input type="text" class="form-control rounded-4 border-flowtech border-3 p-3 bg-dark text-light" id="nom" placeholder="John" name="nom" />
						</div>
					</div>
				</div>

				<!-- Email -->
				<div class="row">
					<div class="col">
						<div class="form-floating mb-3">
							<input type="email" class="form-control rounded-4 border-flowtech border-3" id="email" placeholder="john.doe@example.com" name="email" />
							<label for="email">Adresse email</label>
						</div>
					</div>
				</div>

				<!-- Numéro de téléphone -->
				<div class="row">
					<div class="col">
						<div class="form-floating mb-3">
							<input type="number" class="form-control rounded-4 border-flowtech border-3" id="telephone" placeholder="0769581707" name="telephone" />
							<label for="nbcig">Numéro de téléphone</label>
						</div>
					</div>
				</div>

				<!-- Mot de passe -->
				<div class="row">
					<div class="col">
						<div class="form-floating mb-3">
							<input type="password" class="form-control rounded-4 border-flowtech border-3" id="motdepasse" placeholder="6mi5q9rvYrl&Rx4v" name="motdepasse" />
							<label for="motdepasse">Mot de passe</label>
						</div>
					</div>
				</div>



				<!-- Bouton de connexion -->
				<button type="submit" name="submit" id="submit" value="REGISTER" class="btn btn-lg btn-flowtech w-100"><i class="fas fa-arrow-right me-2"></i>S'inscrire</button>

				<!-- Message d'erreur -->
				<?php if (isset($error)): ?>
					<div class="alert alert-danger mt-3" role="alert">
						<?= $error ?>
					</div>
				<?php endif; ?>

				<!-- Changement de page -->
				<div class="mt-3">
					<span class="text-light">J'ai un compte.</span>
					<a href="/pages/login.php" class="link-primary">Je me connecte</a>
				</div>
			</form>
		</div>
	</main>
</body>

</html>