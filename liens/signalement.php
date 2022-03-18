<?php
require_once "../src/database/config.php";
?>

<!doctype HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="icon" href="../favicon.ico" />
<meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="stylesheet" href="./src/css/style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
<title>Gestion.immo - Signalement</title>
</head>
<body>
<nav class="navbar mb-2 light fixed-top navbar-light" style="background-color: #e3f2fd;">
<div class="container-fluid">
	<a class="navbar-brand" href="../index.php">Gestion.immo</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Signalement eclairage</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
				<li class="nav-item">
				<a class="nav-link" aria-current="page" href="../index.php">Accueil</a>
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Signalement</a>
				<li class="nav-item">
				<a class="nav-link" aria-current="page" href="#">Recommandations</a>
			</ul>
		</div>
	</div>
</div>
</nav>
<div style="padding-bottom: 1em;" class="container-fluid">
	<form method="post" action="../djksqjkdzq.php">
		<br>
		<br>
		<br>
		<h2 class="text-center">Signalement</h2>
		<div class="form-floating mb-3">
			<select class="form-select" name="signalement" id="floatingSelect" aria-label="selectionneur">
				<option selected>Selectionnez le type du problème</option>
				<option value="Eclairage">Eclairage</option>
				<option value="Interphonie">Interphonie</option>
				<option value="Espaces verts">Espaces verts</option>
				<option value="Graffitis">Graffitis</option>
				<option value="Autres">Autres..</option>
			</select>
			<label for="floatingSelect">Type du problème?</label>
		</div>
		<div class="mb-3">
			<label class="form-label">Nom</label>
			<input type="text" name="nom" id="nom" class="form-control" placeholder="Doe" required />
		</div>
		<div class="mb-3">
			<label class="form-label">Prénom</label>
			<input type="text" name="prenom" id="prenom" class="form-control" placeholder="John" required />
		</div>
		<div class="mb-3">
			<label class="form-label">Adresse</label>
			<input type="text" name="adresse" class="form-control" placeholder="n°, rue, ville, code postal" required />
		</div>
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input type="email" name="email" class="form-control" placeholder="john.doe@exemple.com">
		</div>
		<div class="mb-3">
			<label class="form-label">Message</label>
			<textarea class="form-control" name="messages" placeholder="Quel est le problème?" rows="3"></textarea>
		</div>
		<div class="mb-3">
			<label class="form-label">Envoyer un fichier</label>
			<input class="form-control" type="file" name="formFile">
		</div>
		<div class="text-center">
			<input type="submit" name="insert" class="btn btn-secondary btn-lg btn-success" value="Envoyer"/>
		</div>
		</fieldset>
	</form>
</div>
</body>
</html>