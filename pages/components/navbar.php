<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title text-light" id="offcanvasExampleLabel">Calendrier</h5>
		<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<iframe class="w-100 h-100" src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffb525&ctz=Europe%2FParis&showTitle=0&showDate=0&showPrint=0&showTabs=0&showTz=0&showCalendars=0&src=MDc3ZmE4OGNlZWEzY2JhNTdlOGU2MTg5Y2FkZDdmMWY5Zjc4ZDE4N2IyZGViYWQzNmIzNjI2ZWIxYWEzYWI3NEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23F09300" style="border: solid 1px #777"></iframe>
	</div>
</div>
<nav class="navbar navbar-expand-lg bg-flowtech">
	<div class="container-fluid">
		<a class="navbar-brand magz text-dark" href="/index.php">FlowTech</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/index.php#services">Nos services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/index.php#contact">Contact</a>
				</li>
			</ul>
			<div class="d-flex" role="search">
				<ul class="navbar-nav">
					<li class="nav-item m-1">
						<a class="btn btn-dark fw-bold text-light shadow" href="/pages/configurateur.php">Configurateur</a>
					</li>
					<li class="nav-item m-1">
						<a class="btn btn-dark fw-bold text-light shadow" href="/pages/shop.php">Magasin</a>
					</li>
					<li class="nav-item m-1">
						<button class="btn btn-dark fw-bold text-light shadow" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="bi bi-calendar"></i></button>
					</li>
					<li class="nav-item m-1">
						<div class="dropdown">
							<button class="btn btn-dark shadow dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i></button>
							<ul class="dropdown-menu dropdown-menu-end bg-dark bg-opacity-80 border-dark mt-2">
								<li>
									<a class="dropdown-item text-light text-bold" href="/pages/panier.php"><i class="bi bi-cart-fill mx-2"></i>Panier</a>
								</li>
								<li>
									<a class="dropdown-item text-light text-bold" href="/pages/profile.php"><i class="bi bi-person-circle mx-2"></i>Profil</a>
								</li>
								<li>
									<a class="dropdown-item text-light text-bold" href="/pages/connexion.php"><i class="bi bi-box-arrow-in-right mx-2"></i>Connexion</a>
								</li>
								<li>
									<a class="dropdown-item text-light text-bold" href="/pages/inscription.php"><i class="bi bi-box-arrow-in-right mx-2"></i>Inscription</a>
								</li>
								<li>
									<a class="dropdown-item text-light text-bold"><i class="bi bi-box-arrow-in-left mx-2"></i>Déconnexion</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>