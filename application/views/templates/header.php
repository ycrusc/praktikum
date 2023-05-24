<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?= base_url() ?>asset/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?= $judul; ?></title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>asset/assetregister/css/linearicons.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/assetregister/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/assetregister/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/assetregister/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/assetregister/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/assetregister/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/assetregister/css/main.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/assetregister/css/contact.css">
</head>


<body>
	<!-- Start Header Area -->
	<header class="default-header">
		<nav class="navbar sticky-top top-0 navbar-expand-lg bg-secondary shadow">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="<?= base_url() ?>asset/img/logo.png" width="70" height="30" alt="">
				</a>
				<a class="navbar-brand text-white" href="<?= base_url() ?>home">
					the shine of JAVA
				</a>
				<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarToggler">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="navbar-brand text-white" href="<?= base_url() ?>home">Home</a></li>
						<li class="nav-item"><a class="navbar-brand text-white" href="<?= base_url() ?>wisata">Wisata</a></li>
						<li class="nav-item"><a class="navbar-brand text-white" href="<?= base_url() ?>event">Event</a></li>
						<li class="nav-item"><a class="navbar-brand text-white" href="<?= base_url() ?>contact">Contact</a></li>
						<?php if ($email) : ?>
							<li class="nav-item"><a class="navbar-brand text-white" href="<?= base_url() ?>user">Dashboard</a></li>
						<?php else : ?>
							<li class="nav-item"><a class="navbar-brand text-white" href="<?= base_url() ?>auth">Login</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>