<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Echtes Leben finden</title>
	<meta name="description" content="Stefan Klemm Author, Category: christianity">
	<meta name="keywords" content="Gemeinde, Glauben, Jesus">
	<meta property="og:locale" content="de_DE">
	<meta property="og:type" content="website">
	<meta property="og:title" content="index of cgmod">
	<meta property="og:site_name" content="website of Christliche Gemeinde Marktoberdof">
	<meta property="og:type" content="article">
	<!--link rel='dns-prefetch' href='//www.google.com' /-->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- ======   SimpleLineIcons       ====== -->
	<link href="assets/css/simple-line-icons.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- ======     Navigation     ====== -->
	<header>
		<!-- ======   Start Navigation       ====== -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top py-0">
			<div class="container-fluid bg-black">
				<a class="navbar-brand font-alt" href="#home">
					<p></p>
				</a>
				<button class="navbar-toggler btn-round" type="button" data-toggle="collapse" data-target="#navbar-toggle" aria-controls="navbar-toggle">
					<span class="icon-menu"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end text-white" id="navbar-toggle">
					<ul class="navbar-nav">
						<li class="nav-item">
							<?php if ($menue === 1) : ?>
								<a class="nav-link active" href="../index.php">Home</a>
							<?php else : ?>
								<a class="nav-link" href="../index.php">Home</a>
							<?php endif ?>
						</li>
						<li class="nav-item">
							<?php if ($menue === 2) : ?>
								<a class="nav-link active" href="ueber_uns.php">Über uns</a>
							<?php else : ?>
								<a class="nav-link" href="ueber_uns.php">Über uns</a>
							<?php endif ?>
						</li>
						<li class="nav-item">
							<?php if ($menue === 3) : ?>
								<a class="nav-link active" href="kontakt.php">Kontakt</a>
							<?php else : ?>
								<a class="nav-link" href="kontakt.php">Kontakt</a>
							<?php endif ?>
						</li>
						<li class="nav-item">
							<?php if ($menue === 4) : ?>
								<a class="nav-link active" href="impressum.php">Impressum</a>
							<?php else : ?>
								<a class="nav-link" href="impressum.php">Impressum</a>
							<?php endif ?>
						</li>
						<li class="nav-item">
							<?php if ($menue === 5) : ?>
								<a class="nav-link active" href="datenschutz.php">Datenschutz</a>
							<?php else : ?>
								<a class="nav-link" href="datenschutz.php">Datenschutz</a>
							<?php endif ?>
						</li>
					</ul>
					<!-- navbar-nav -->
				</div>
				<!-- navbar-collapse -->

			</div>
		</nav>
		<!-- ======   Ende Navigation       ====== -->
	</header>

	<br />
	<div class="container-fluid header_d2">
		<div class="row">
			<div class="col-md-2">
				<img id="floatLeft" src="images/cg-mod.png" alt="Bild cgmod">
			</div>
			<div class="col-md-10">
				<?php echo "<p>&nbsp;</p>" ?>
				<?php echo "<h2>$titel</h2>" ?>
				<?php echo "<p>$zeile1</p>" ?>
				<?php echo "<p>$zeile2</p>" ?>
				<?php echo "<p>&nbsp;</p>" ?>
			</div>
		</div>
	</div>

	<br>