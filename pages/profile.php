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
			<nav class="navbar navbar-expand-lg bg-flowtech">
				<div class="container-fluid">
					<a class="navbar-brand magz text-dark" href="/index.html">FlowTech</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="/index.html#services">Nos services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/index.html#contact">Contact</a>
							</li>
						</ul>
						<div class="d-flex" role="search">
							<ul class="navbar-nav">
								<li class="nav-item m-1">
									<a class="btn btn-dark fw-bold text-light shadow" href="/pages/configurateur.html">Configurateur</a>
								</li>
								<li class="nav-item m-1">
									<a class="btn btn-dark fw-bold text-light shadow" href="/pages/shop.html">Magasin</a>
								</li>
								<li class="nav-item m-1">
									<button class="btn btn-dark fw-bold text-light shadow" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="bi bi-calendar"></i></button>
								</li>
								<li class="nav-item m-1">
									<div class="dropdown">
										<button class="btn btn-dark shadow dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i></button>
										<ul class="dropdown-menu dropdown-menu-end bg-dark bg-opacity-80 border-dark mt-2">
											<li>
												<a class="dropdown-item text-light text-bold" href="/pages/panier.html"><i class="bi bi-cart-fill mx-2"></i>Panier</a>
											</li>
											<li>
												<a class="dropdown-item text-light text-bold" href="/pages/profile.html"><i class="bi bi-person-circle mx-2"></i>Profile</a>
											</li>
											<li>
												<a class="dropdown-item text-light text-bold" href="#"><i class="bi bi-box-arrow-in-right mx-2"></i>Se connecter</a>
											</li>
											<li>
												<a class="dropdown-item text-light text-bold" href="#"><i class="bi bi-box-arrow-in-left mx-2"></i>Se déconnecter</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<!--Fin de nav-->
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
		<div class="container">
			<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-2 my-5 border-top border-flowtech">
				<div class="col my-3">
					<a class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
						<img width="50" height="50" src="/img/logos/logo-min-rounded.png" alt="Logo footer" />
					</a>
					<p class="text-light">Copyright FlowTech © 2023</p>
					<a href="/pages/legal.html" class="nav-link text-light">Mentions légales</a>
				</div>
				<div class="col my-3"></div>
				<div class="col my-3"></div>

				<div class="col my-3">
					<h5 class="fw-bold text-flowtech">Pages</h5>
					<ul class="nav flex-column">
						<li class="nav-item mb-2">
							<a href="/index.html" class="nav-link p-0 text-light">Accueil</a>
						</li>
						<li class="nav-item mb-2">
							<a href="/pages/shop.html" class="nav-link p-0 text-light">Magasin</a>
						</li>
						<li class="nav-item mb-2">
							<a href="/pages/configurateur.html" class="nav-link p-0 text-light">Configurateur</a>
						</li>
					</ul>
				</div>

				<div class="col my-3 text-flowtech">
					<h5 class="fw-bold">Ressources</h5>
					<ul class="nav flex-column">
						<li class="nav-item mb-2">
							<a href="/pages/faq.html" class="nav-link p-0 text-light">FAQ</a>
						</li>
						<li class="nav-item mb-2">
							<a href="/pages/clause.html" class="nav-link p-0 text-light">Clause de confidentialité</a>
						</li>
					</ul>
				</div>
			</footer>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
