<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Confirmation - FlowTech</title>
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
				<h1 class="display-4 fw-bold text-flowtech">Confirmations</h1>
				<div class="col-lg-6 mx-auto">
					<p class="lead mb-4 text-light">Merci d'avoir commandé!</p>
					<!-- BOUTON LIST ACHAT-->
					<section class="container my-5">
						<h2 class="fw-bold mb-4 text-light">Détails de la Commande</h2>
						<div class="table-responsive">
							<table class="table table-dark border-flowtech table-striped">
								<thead>
									<tr>
										<th>Article</th>
										<th>Prix</th>
										<th>Quantité</th>
									</tr>
								</thead>
								<tbody id="confirmation-tablebody">
									<!-- Le contenu du tableau de confirmation sera ajouté dynamiquement ici -->
								</tbody>
							</table>
						</div>
						<div class="d-flex justify-content-end">
							<p class="lead text-light">Sous-total: <span id="confirmation-subtotal"></span> €</p>
						</div>
					</section>
				</div>
			</div>
		</header>

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
		<script src="/js/panier.js"></script>
		<script>
			document.addEventListener("DOMContentLoaded", function () {
				afficherDetailsCommande();
			});
		</script>
	</body>
</html>
