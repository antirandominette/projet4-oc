<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Page de contact de l'Agence La Panthère, agence de création de sites web. Vous avez une idée de projet ? Un site à rénover ? Contactez nous.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.avif">
    
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
    <title>Contact - Agence Web Design - La Panthère</title>
</head>

<body>
	<!-- header beginning -->
	<header class="bloc bgc-white l-bloc " id="header-section">
		<div class="container bloc-sm">

			<nav class="navbar row">
				<div class="navbar-header">
					<a class="navbar-brand" href="../index.html">
						<figure>
							<img src="../assets/img/agence-la-panthere-monochrome.svg" alt="Image accueil Agence La Panthère" height="40" />
						</figure>
					</a>
					
					<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
						<span>
							<i class="fa fa-bars fa-2x"></i>
						</span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-1 special-dropdown-nav">
					<ul class="site-navigation nav navbar-nav">
						<li>
							<a href="../index.html">Accueil</a>
						</li>
						<li>
							<a href="./contact.html">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- header end -->

	<!-- main beginning -->
	<main class="page-container">
		<!-- talk about section beginning -->
		<section class="bloc bg-dots-bg bg-repeat bgc-atomic-tangerine d-bloc bloc-bg-texture texture-paper" id="talk-about-webdesign-section">
			<div class="container bloc-lg">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="text-center hero-bloc-text tc-white">
							Parlons web design !
						</h1>
						<p class="text-center mg-lg tc-white tight-width-whitespace">
							Nous sommes ravis que vous souhaitiez collaborer avec notre agence.<br>
							Parlez-nous de votre projet en complétant le formulaire ci-dessous.
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- talk about section end -->

		<!-- form section beginning -->
		<section class="bloc bgc-white l-bloc" id="form-section">
			<div class="container bloc-lg">
				<div class="row">
					<div class="col-sm-12">
						<form
							method="post"
							action="../includes/form_1.php" 
						>
							<div class="form-group">
								<label>
									Nom
								</label>
								<input name="name" type="text" class="form-control" required  />
							</div>
							<div class="form-group">
								<label>
									Adresse email
								</label>
								<input name="email" type="email" class="form-control" required />
							</div>
							<div class="form-group">
								<label>
									Comment nous avez-vous connu ?
								</label>
								<input class="form-control" name="heard-about" type="text" required />
							</div>
							<div class="form-group">
								<label>
									Brief de votre projet (Ajoutez autant de détails que nécessaire)<br>
								</label>
								<textarea id="message" name="message" class="form-control" rows="4" cols="50" required ></textarea>
							</div> 
							<input name="submit" class="bloc-button btn btn-lg btn-block cta-hero btn-atomic-tangerine" type="submit" />
						</form>
						<?php
							echo '
								<div class="alert alert-success">
									Your message has been sent.
								</div>
								';
						?>
						<p id="form-infos">
							contact@agencelapanthere.com<br>2 place Sathonay 69001 Lyon<br>Ouvert de 9h à 18h, du lundi au vendredi<br>
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- form section end -->

		<!-- ScrollToTop Button -->
		<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
		<!-- ScrollToTop Button END-->
	</main>
	<!-- Principal conteneur END -->
	
	<!-- footer beginning -->
	<footer class="bloc bgc-atomic-tangerine d-bloc" id="footer-section">
		<div class="container bloc-sm">
			<div class="row">
				<div class="col-sm-12">
					<p class="text-center white">
						Agence La Panthère - Agence web basée à Lyon.<br>
					</p>
					<ul class="row row-no-gutters social">
						<li class="col-sm-3 text-center">
								<a class="social" href="../index.html"><span class="fa fa-twitter icon-md"></span></a>
						</li>
						<li class="col-sm-3 text-center">
							<a class="social" href="../index.html"><span class="fa fa-facebook icon-md"></span></a>
						</li>
						<li class="col-sm-3 text-center">
							<a class="social" href="../index.html"><span class="fa fa-dribbble icon-md"></span></a>
						</li>
						<li class="col-sm-3 text-center">
							<a class="social" href="../index.html"><span class="fa fa-instagram icon-md"></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end -->

	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	<script src="../scripts/jqBootstrapValidation.js"></script>
	<script src="../scripts/formHandler.js"></script>
	<script src="https://kit.fontawesome.com/15cd056921.js" crossorigin="anonymous"></script>
</body>
</html>