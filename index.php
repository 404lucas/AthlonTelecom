<?php include 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Athlon Telecom</title>
	<head>

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/9e0a3da5bd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="C:/xampp/htdocs/Athlon/css/all.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="estilo/aaa.css">
	<meta name = "viewport" content="width=devicewidth, initial-scale=1.0">
	<meta name = "keywords" content = "Athlon, Athlon Telecom, Internet Santana de Parnaiba, Santana de Parnaíba, Internet">
	<meta name="description" content = "A Athlon Telecom é uma empresa de Internet via Fibra Óptica ou Rádio, atuando em Santana de Parnaíba">
	<meta charset="utf-8">
	<meta name="facebook-domain-verification" content="c4hd2kmaabvre12w88m41izyoyzfnc"/>
	<link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

	<header>
		<div class="center">
		<div class="logo left">
			<a href="<?php echo INCLUDE_PATH;?>"><img src="images/AthlonTelecomLogo.png" width="" height="90px"></a>
		</div><!--logo-->
		<nav class = "desktop right">
			<ul>
				<li><a href="http://localhost/public_html/">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH;?>planos">Planos</a></li>
				<li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
				<li><a href="<?php echo INCLUDE_PATH;?>planos#apps">Apps</a></li>
				<li><a href="<?php echo INCLUDE_PATH;?>downloads">Downloads</a></li>
				<li><a class="c-assinante"href="https://ixc.athlontelecom.com.br/central_assinante_web/login" target="_blank"><i class="fas fa-user"></i>Central do Assinante</a></li>
			</ul>

		</nav>
		<nav class = "mobile right">
			<div class="butmobile">
				<i class="fa fa-bars"></i>
			</div>
			<ul>
				<li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH;?>planos">Planos</a></li>
				<li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
				<li><a href="<?php echo INCLUDE_PATH;?>planos#apps">Apps</a></li>
				<li><a href="<?php echo INCLUDE_PATH;?>downloads">Downloads</a></li>
				<li><a href="https://ixc.athlontelecom.com.br/central_assinante_web/login">Central do Assinante</a></li>
			</ul>
		</nav>
		<div class = "clear"></div>
	</div><!--center-->
	</header>


<div class="container-principal">

	<?php

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			include('pages/error.php');
		}

	?>

</div>

		<footer>

		</footer>
		<script src="<?php echo INCLUDE_PATH;?>js/jquery.min.js"></script>
		<script src="<?php echo INCLUDE_PATH;?>js/script.js"></script>
		<?php
			if($url == 'home'|| $url == ''){
		?>
		<script src="<?php echo INCLUDE_PATH;?>js/slide.js"></script>
		<?php }?>
		<?php
			if($url == 'contato'){
		?>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCzPEOaPGLmDGRwBW4P584sYpL0nW6n_L4"></script>
		<script src ="<?php echo INCLUDE_PATH;?>js/map.js"></script>

	<?php }?>
</body>
</html>
