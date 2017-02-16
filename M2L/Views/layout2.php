<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<!-- Font awesome -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/style.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Menu</li>
				<?php
				if($_SESSION['auth']['level']== 1){
					echo('<li class="open"><a href="'.BASE_URL.'"/admin"><i class="fa fa-dashboard"></i>Dashboard ADMIN</a></li>
				}
				<li><a href="'.BASE_URL.'"/gestionUser"><i class="glyphicon glyphicon-user"></i>Gestion Utilisateur</a></li>
				<li><a href="'.BASE_URL.'"/gestionFormation"><i class="glyphicon glyphicon-user"></i>Gestion Formation</a></li><hr>
				<li class="ts-account">
				<a href="'.BASE_URL.'"/disconnect"><img src="<?= BASE_URL; ?>Views/images/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""><i class="glyphicon glyphicon-log-out"></i>Déconnexion</a>
			    </li>');}
			    elseif ($_SESSION['auth']['level'] == 2){
			    	echo('<li class="open"><a href="'.BASE_URL.'"/admin"><i class="fa fa-dashboard"></i>Dashboard CHEF</a></li>
				<li><a href="'.BASE_URL.'"/gestionUser"><i class="glyphicon glyphicon-user"></i>Liste Utilisateur</a></li>
				<li><a href="'.BASE_URL.'"/gestionFormation"><i class="glyphicon glyphicon-plus-sign"></i>Ajout Formation</a></li><hr>
				<li class="ts-account">
				<a href="'.BASE_URL.'"/disconnect"><img src="<?= BASE_URL; ?>Views/images/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""><i class="glyphicon glyphicon-log-out"></i>Déconnexion</a>
			    </li>');
			    }
				?>
				
			</ul>
		</nav>
	</div>
	<div class="container">
        <?php echo $content; ?>
    </div>

</body>

</html>