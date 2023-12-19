<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FAQ - FlowTech</title>
	<meta name="description" content="FlowTech, surement les meilleurs PC du marché!" />
	<link rel="icon" type="image/x-icon" href="/img/logos/logo-min-rounded.png" />
	<!-- CSS CUSTOM + BOOTSTRAP -->
	<link href="/css/custom.css" rel="stylesheet" />
	<!-- BOOTSTRAP ICONS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
</head>

<body class="bg-dark">
	<header class="header-shop">
		<!-- NAVBAR -->
		<?php include 'components/navbar.php'; ?>
		<div class="px-4 pt-5 my-5 text-center">
			<h1 class="display-4 fw-bold text-flowtech">FAQ</h1>
			<div class="col-lg-6 mx-auto">
				<p class="lead mb-4 text-light">Qui sommes nous, ou travaillons nous, comment nous contacter, etc... tout est expliqué ici!</p>
				<!-- BOUTON PANIER-->
			</div>
		</div>
	</header>
	<!--DEBUT ACCORDION-->
	<!--TODO: Mettre une fleche pour l'accordion-->
	<div class="container">
		<div class="accordion accordion-flush" id="accordionFlushExample">
			<div class="accordion-item bg-dark">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed bg-dark text-light border-flowtech" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Qui sommes nous ?</button>
				</h2>
				<div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
					<div class="accordion-body text-light border-flowtech">Nous sommes une petite équipe de développement en bts sio ceci est notre premier projet web de groupe sur la création d'une entreprise fictive de vente et de montage de pc gamer.</div>
				</div>
			</div>
			<div class="accordion-item bg-dark">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Ou nous trouver ?</button>
				</h2>
				<div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
					<div class="accordion-body text-light border-flowtech">Vous pouvez nous retrouvez au Lycée de la CCI dans le Gard à Nimes</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">FlowTech est elle une vraie entreprise ?</button>
				</h2>
				<div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
					<div class="accordion-body bg-dark text-light">Non ce site est un projet de groupe pour le bts sio du lycée CCI Gard à Nîmes, Il n'est pas possible d'acheter de pc et aucun pc ne sera envoyé, aucun prélèvement ne sera fait.</div>
				</div>
			</div>
		</div>
	</div>
	<!--FIN DE Accordion-->

	<!-- FOOTER -->
	<?php include 'components/footer.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>