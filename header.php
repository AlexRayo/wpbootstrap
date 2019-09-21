<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no"/>
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="vidente, gitana, tarot, españa, medium" />
	<meta name="author" content="Alex Rayo" />
	<meta name="Description" content="Somos un prestigioso equipo, dispuesto a ofrecerte los mejores servicios de videncia, tarot gitano y cartomancia">
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,800&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<?php wp_head(); ?>
<body>
	<header class="position-fixed bg-white w-100 " style="z-index: 10;">
	<div class="position-absolute w-100 h-100"><div class="bg-secondary d-none d-md-block mx-auto text-white py-1 px-3 text-sm" style="margin-top: 17px; width: 310px;"><span class="fa fa-phone mr-2"></span>632 57 73 64 | Sevilla - España</div></div> 
	
		<div class="top-bar d-flex justify-content-between pl-0 pl-sm-5" id="top-bar">			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="item-bar logo-container align-self-center" style="z-index: 2;"><span class="d-block logo img"></span></a>
			
			<div class="align-self-center" style="z-index: 2;">
				<a href="tel:632577364" class="btn btn-primary d-block d-md-none"><span class="fa fa-phone mr-2"></span>Llamar</a>
			</div>

			<div class="icon-menu pointer align-self-center" onclick="desplegarMenu()" id="icon-menu">
				<span class="icon-line"></span>
				<span class="icon-line"></span>
				<span class="icon-line"></span>
			</div>
							
				<div id="menu" class="menu-container navbar d-block">
					<nav class="menu">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="">Inicio<span class="d-inline d-lg-none fa fa-home pl-2"></span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/category/services' ) ); ?>" class="">Servicios<span class="d-inline d-lg-none fa fa-briefcase pl-2"></span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/sobre-nosotros' ) ); ?>" class="">Quiénes somos<span class="d-inline d-lg-none fa fa-group pl-2"></span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="">Contacto<span class="d-inline d-lg-none fa fa-envelope pl-2"></span></a></li>
						</ul>
					</nav>
				</div>				
		</div>	

	</header>
