<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Profile - FlowTech</title>
		<meta name="description" content="FlowTech, surement les meilleurs PC du marché!" />
		<link rel="icon" type="image/x-icon" href="/img/logos/logo-min-rounded.png" />
		<!-- CSS CUSTOM + BOOTSTRAP -->
		<link href="/css/custom.css" rel="stylesheet" />
		<!-- BOOTSTRAP ICONS-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
	</head>
	<body class="bg-dark">
		<!-- OFFCANVA CALENDAR -->
		<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title text-light" id="offcanvasExampleLabel">Calendrier</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<iframe class="w-100 h-100" src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffb525&ctz=Europe%2FParis&showTitle=0&showDate=0&showPrint=0&showTabs=0&showTz=0&showCalendars=0&src=MDc3ZmE4OGNlZWEzY2JhNTdlOGU2MTg5Y2FkZDdmMWY5Zjc4ZDE4N2IyZGViYWQzNmIzNjI2ZWIxYWEzYWI3NEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23F09300" style="border: solid 1px #777"></iframe>
			</div>
		</div>
		<header class="header-shop">
			<!-- NAVBAR -->
			<?php include 'components/navbar.php';?>
			<div class="px-4 pt-5 my-5 text-center">
				<h1 class="display-4 fw-bold text-flowtech">Profile</h1>
				<div class="col-lg-6 mx-auto">
					<p class="lead mb-4 text-light">Votre profile pour gérer vos informations</p>
				</div>
			</div>
		</header>
		<!--DEBUT ACCORDION-->
		<!--TODO: intégrer le mail du profile / ses informations qui sont dans la bdd -->
		<div class="container">
			<div class="accordion accordion-flush" id="accordionFlushExample">
				<div class="accordion-item bg-dark">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed bg-dark text-light border-flowtech" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Modifier votre mail</button>
					</h2>
					<div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body text-light border-flowtech">Bientot votre mail pour le changer.</div>
					</div>
				</div>
				<div class="accordion-item bg-dark">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Vos informations</button>
					</h2>
					<div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body text-light border-flowtech">Bientôt vos informations, pour les modifier</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Mots de passe</button>
					</h2>
					<div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body bg-dark text-light">Bientôt modification du mots de passe.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">Se déconnecter</button>
					</h2>
					<div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body bg-dark text-light">Bientôt déconnexion du compte.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">Supprimer le compte</button>
					</h2>
					<div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body bg-dark text-light">Bientôt suppression du compte.</div>
					</div>
				</div>
			</div>
		</div>
		<!--FIN DE Accordion-->
		<!-- FOOTER -->
		<?php include 'components/footer.php';?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
