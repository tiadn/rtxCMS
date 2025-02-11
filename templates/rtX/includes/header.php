<!DOCTYPE html>
<html lang="en">

<?php
global $rtX;
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Tum CSS'ler -->
	<link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/style/css/index.css?<?= time() ?>">

	<title><?= $config['hotelName']  . ': ' . $page ?></title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"><?= User::userData('username') ?></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Community
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="/news/">News</a></li>
							<li><a class="dropdown-item" href="/staff">Staffs</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled">Disabled</a>
					</li>
				</ul>
				<form class="d-flex" role="search">
					<a class="nav-link" style="color:red !important;" href="/logout">Logout</a>
				</form>
			</div>
		</div>
	</nav>
	<div class="image-component">
		<div class="my-component">
			<img class="img-shadow" src="<?= $rtX['rtXLookPath'] . User::userData('look') ?>&size=l&head_direction=3&direction=2&action=wlk&gesture=sml" alt="<?= User::userData('username') ?>'s Avatar">
			<div class="currencies">
				<div class="currency"><img src="<?= $rtX['imagePath'] ?>credits.png"> : <?= User::userData('credits') ?></div>
				<div class="currency"> <img src="<?= $rtX['imagePath'] ?>duckets.png"> : <?= User::userData('activity_points') ?></div>
				<div class="currency"><img src="<?= $rtX['imagePath'] ?>diamonds.png" style="margin-top: -3px;"> : <?= User::userData('vip_points') ?></div>
			</div>
		</div>
		<div class="page-info"><?= User::userData('username')  . ' <span style="font-size:20px;">〰</span> ' . $page ?></div>
	</div>
</body>

</html>