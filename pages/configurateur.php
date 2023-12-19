<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Configurateur - FlowTech</title>
	<meta name="description" content="FlowTech, surement les meilleurs PC du marché!" />
	<link rel="icon" type="image/x-icon" href="/img/logos/logo-min-rounded.png" />
	<!-- CSS CUSTOM + BOOTSTRAP -->
	<link href="/css/custom.css" rel="stylesheet" />
	<!-- BOOTSTRAP ICONS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
</head>

<body class="bg-dark">
	<header class="header-25">
		<!-- NAVBAR -->
		<?php include 'components/navbar.php'; ?>
		<div class="px-4 pt-5 my-5 text-center">
			<h1 class="display-4 fw-bold text-flowtech">Configurateur</h1>
			<div class="col-lg-6 mx-auto">
				<p class="lead mb-4 text-light">Dans le magasin configurateur FlowTech, vous pouvez construire votre propre PC avec les composants de votre choix et bénéficier de notre expertise pour l'assemblage.</p>
				<!-- BOUTON PANIER-->
				<!-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
						<a class="btn btn-flowtech btn-lg px-4 me-sm-3" href="panier.html">Accéder au panier <img width="20" src="../icon/cart.png" alt="" /> </a>
					</div> -->
			</div>
		</div>
	</header>
	<div class="container mb-5">
		<form>
			<div class="row mt-3">
				<div class="col">
					<!--CARTE MERE-->
					<label for="carte-mere" class="form-label text-white fw-bold"><img width="20" src="/icon/carte-mere.png" alt="icon-graphic-card" /> &nbsp;Carte Mère</label>
					<select class="form-select bg-dark text-white border-flowtech border-2" id="carte-mere">
						<option value="135">MSI MPG B550 Gaming Plus</option>
						<option value="90">Carte Mere GIGABYTE B550M DS3H</option>
						<option value="75">ASUS PRIME B450M-A II</option>
						<option value="235">MSI MAG B650 Tomahawk</option>
						<option value="250">ASUS PRIME Z790-P</option>
						<option value="145">Gigabyte B760 Gaming X</option>
					</select>
				</div>
				<div class="col">
					<!-- PROCESSEUR -->
					<label for="processeur" class="form-label text-white fw-bold"><img width="20" src="/icon/processor.png" alt="icon-graphic-card" /> &nbsp;Processeur</label>
					<select class="form-select bg-dark text-white border-flowtech border-2" id="processeur">
						<option value="155">Intel® Core™ i5-12400F</option>
						<option value="300">Intel® Core™ i5-13600KF</option>
						<option value="340">Intel® Core™ i7-12700K</option>
						<option value="600">Intel® Core™ i9-14900KF</option>
						<option value="140">AMD Ryzen 5 5600G</option>
						<option value="200">AMD Ryzen 7 5800X</option>
						<option value="425">AMD Ryzen 9 7900X</option>
					</select>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<label for="carte-graphique" class="form-label text-white fw-bold"><img width="20" src="/icon/graphic-card.png" alt="icon-graphic-card" /> &nbsp;Carte graphique</label>
					<select class="form-select bg-dark text-white border-flowtech border-2" id="carte-graphique">
						<option value="0">Sans</option>
						<option value="322">ASUS DUAL NVIDIA GeForce RTX 3060 V2 OC Edition 12GB</option>
						<option value="380">Gigabyte NVIDIA GeForce RTX 4060</option>
						<option value="173">MSI NVIDIA GeForce GTX 1650</option>
						<option value="475">MSI GeForce RTX 4060 Ti</option>
						<option value="265">MSI RTX 3050 Ventus</option>
						<option value="1100">ASUS ROG STRIX NVIDIA GeForce RTX 4070 Ti</option>
						<option value="2200">MSI GeForce RTX 4090 SUPRIM</option>
					</select>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<label for="ram" class="form-label text-white fw-bold"><img width="20" src="/icon/ram.png" alt="icon-graphic-card" /> &nbsp;RAM</label>
					<select class="form-select bg-dark text-white border-flowtech border-2" id="ram">
						<option value="25">8GB DDR4</option>
						<option value="50">16GB DDR5</option>
						<option value="100">32GB DDR5</option>
						<option value="200">64GB DDR5</option>
						<option value="500">128GB DDR5</option>
					</select>
				</div>
				<div class="col">
					<label for="stockage" class="form-label text-white fw-bold"><img width="20" src="/icon/ssd.png" alt="icon-graphic-card" /> &nbsp;Stockage</label>
					<select class="form-select bg-dark text-white border-flowtech border-2" id="stockage">
						<option value="25">256GB NVME M.2</option>
						<option value="60">512GB NVME M.2</option>
						<option value="100">1TB NVME M.2</option>
						<option value="200">2TB NVME M.2</option>
						<option value="500">3TB NVME M.2</option>
					</select>
				</div>
				<div class="col">
					<label for="disque-sup" class="form-label text-white fw-bold"><img width="20" src="/icon/disque-dur.png" alt="icon-graphic-card" /> &nbsp;Disque Suplémentaire</label>
					<select class="form-select bg-dark text-white border-flowtech border-2" id="disque-sup">
						<option value="0">Sans</option>
						<option value="35">512GB HDD</option>
						<option value="50">1TB HDD</option>
						<option value="80">2TB HDD</option>
					</select>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col">
					<label for="boitier" class="form-label text-white fw-bold"><img width="20" src="/icon/boitier.png" alt="icon-graphic-card" /> &nbsp;Boîtier</label>
					<select class="form-select bg-dark text-white border-flowtech border-2" id="boitier">
						<option value="65">BT MSI MAG FORGE</option>
						<option value="90">NZXT H5 Flow Blanc</option>
						<option value="135">NZXT H7 Flow</option>
						<option value="200">Razer Tomahawk ATX</option>
						<option value="320">ASUS ROG Strix Helios</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p class="mt-5 h4 fw-bold text-white" id="resultat">Prix:</p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-auto">
					<button class="btn btn-flowtech fw-bold shadow" onclick="ajouterAuPanierCustomFromConfigurator()">Ajouter au panier</button>
				</div>
				<div class="col-auto">
					<a class="btn btn-flowtech fw-bold shadow" href="/pages/panier.html">Aller au panier</a>
				</div>
			</div>
		</form>
	</div>

	<!-- FOOTER -->
	<?php include 'components/footer.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="/js/configurateur.js"></script>
	<script src="/js/panier.js"></script>
</body>

</html>