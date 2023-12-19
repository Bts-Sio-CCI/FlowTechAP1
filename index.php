<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FlowTech, PC sur mesures</title>
	<meta name="description" content="FlowTech, surement les meilleurs PC du marché!" />
	<link rel="icon" type="image/x-icon" href="/img/logos/logo-min-rounded.png" />
	<!-- CSS CUSTOM + BOOTSTRAP -->
	<link href="/css/custom.css" rel="stylesheet" />
	<!-- BOOTSTRAP ICONS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
</head>

<body class="bg-dark">
	<!-- MODAL INFORMATION PROJETS -->
	<div class="modal fade bg-dark bg-opacity-75" id="modalInformations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content bg-dark text-light border-flowtech">
				<div class="modal-header border-flowtech">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Attention</h1>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body border-flowtech">Ce site à été créé dans le cadre d'un projet en classe de première année de BTS SIO. Le contenu que vous trouverez ici vient principalement du site <a href="https://www.flowup.shop/" class="link-flowtech">Flowup</a></div>
			</div>
		</div>
	</div>
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
	<!-- HEADER -->
	<header class="header-index">
		<?php include 'pages/components/navbar.php'; ?>
		<div class="header-gradient container">
			<?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
				<div class="container pt-5 w-50">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Message envoyé!</strong> Je vous répondrai dès que possible.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			<?php } ?>
			<div class="row align-items-center g-5 m-0">
				<div class="col-12 col-lg-6">
					<img src="/img/rainbox-geforce-rtx.png" class="pp d-block mx-lg-auto img-fluid rounded-5" alt="Bootstrap Themes" width="400" height="400" loading="lazy" />
				</div>
				<div class="col-12 col-lg-6">
					<h1 class="fw-bold text-light">Découvrez nos PC surpuissants montés sur mesure</h1>
				</div>
			</div>
			<div class="mt-5 align-content-center d-flex justify-content-center">
				<a class="btn btn-flowtech btn-lg text-dark mt-5 fw-bold heartbeat" href="#services"><i class="bi-caret-down-fill"></i>&nbsp;Découvrir&nbsp;<i class="bi-caret-down-fill"></i></a>
			</div>
		</div>
	</header>
	<!-- SERVICES-->
	<section id="services">
		<div class="container px-4 py-5" id="featured-3">
			<h2 class="pb-2 border-bottom border-flowtech text-light">Nos services</h2>
			<div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
				<div class="feature col">
					<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
						<i class="bi-pc text-flowtech"></i>
					</div>
					<h3 class="fs-2 text-light">PC sur mesure</h3>
					<p class="text-light">Notre principal services. Nous vous montons un PC sur mesure selon vos critères. Avec un montage de qualité pour les meilleurs performances possibles.</p>
				</div>
				<div class="feature col">
					<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
						<i class="bi-laptop text-flowtech"></i>
					</div>
					<h3 class="fs-2 text-light">PC prémontés</h3>
					<p class="text-light">Nous proposons aussi des PC déjà configurés et montés par nos soins. Avec un OS déjà installé ces PC sont ReadyToPlay!</p>
				</div>
				<div class="feature col">
					<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
						<i class="bi-tools text-flowtech"></i>
					</div>
					<h3 class="fs-2 text-light">Service réparation</h3>
					<p class="text-light">Un problème avec votre machine ? Pas de soucis, envoyez la nous et nous nous chargerons de la remettre comme neuve.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="container px-4 py-5">
			<h2 class="pb-2 border-bottom border-flowtech text-light pb-3">Contact</h2>
			<div class="row py-3">
				<div class="col-12 col-lg-6">
					<iframe class="rounded h-100 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.117369927356!2d4.366512076567895!3d43.83266427109415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b42d103fb896a9%3A0x2d491738deb25561!2sLyc%C3%A9e%20CCI%20Gard!5e0!3m2!1sfr!2sfr!4v1701768351644!5m2!1sfr!2sfr" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-12 col-lg-6 my-5">
					<h4 class="text-light"><i class="bi-map mx-2 text-flowtech"></i>Adresse</h4>
					<address class="text-light mx-5">Lycée CCI Gard 2300, Avenue des Moulins, 30000 Nîmes</address>
					<h4 class="text-light"><i class="bi-telephone mx-2 text-flowtech"></i>Téléphone</h4>
					<address class="text-light mx-5">07.69.58.17.07 / 07.66.46.72.49</address>
					<h4 class="text-light"><i class="bi-envelope mx-2 text-flowtech"></i>Mail</h4>
					<a class="text-light mx-5" href="mailto:contact@flowtech-sio.fr">contact@flowtech-sio.fr</a>
				</div>
			</div>
			<div class="row py-3">
				<form method="post" action="script/contact.php">
					<div class="row">
						<div class="col-md-6">
							<label for="nom" class="form-label text-light fw-bold mt-2">Nom</label>
							<input type="text" class="form-control bg-dark border-2 border-flowtech text-light" id="nom" name="nom" required />
						</div>
						<div class="col-md-6">
							<label for="email" class="form-label text-light fw-bold mt-2">Email</label>
							<input type="email" class="form-control bg-dark border-2 border-flowtech text-light" id="email" name="email" required />
						</div>
						<div class="col-12">
							<label for="sujet" class="form-label text-light fw-bold mt-2">Sujet</label>
							<input type="text" class="form-control bg-dark border-2 border-flowtech text-light" id="sujet" name="sujet" required />
						</div>
						<div class="col-12">
							<label for="message" class="form-label text-light fw-bold mt-2">Message</label>
							<textarea class="form-control bg-dark border-2 border-flowtech text-light" id="message" rows="3" name="message" required></textarea>
						</div>
						<div class="col-12 mt-3">
							<button type="submit" class="btn btn-outline-flowtech border-2 fw-bold" id="envoyer" name="envoyer">Envoyer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<?php include 'pages/components/footer.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		window.onload = function () {
			var myModal = new bootstrap.Modal(document.getElementById("modalInformations"));
			myModal.show();
		};
	</script>
</body>

</html>