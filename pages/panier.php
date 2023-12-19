<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Panier - FlowTech</title>
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
	</header>
	<div class="container pb-5">
		<table class="table table-dark border-flowtech table-striped">
			<thead>
				<tr>
					<th>Article</th>
					<th>Prix</th>
					<th>Quantité</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody id="cart-tablebody"></tbody>
			<tfoot>
				<tr>
					<td class="border-danger">Totals :</td>
					<th class="border-danger" id="subTotal"></th>
					<td class="border-danger"></td>
					<td class="border-danger"></td>
				</tr>
			</tfoot>
		</table>
		<div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
			<a href="/pages/confirmation.html" class="btn btn-success btn-lg px-4" onclick="confirmerCommande()">Confirmer la commande</a>
		</div>
	</div>
	<!-- FOOTER -->
	<?php include 'components/footer.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="/js/panier.js"></script>
</body>

</html>