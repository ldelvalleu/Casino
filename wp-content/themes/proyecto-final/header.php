<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proyecto-final
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/main.css' ?>">
</head>

<body <?php body_class(); ?>>
			<header class="header-bg">
				<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-black nav-casino ">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
					aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span><a class="nav-link color-white" href="/landing"></a>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<a class="navbar-brand" href="#"><img class="img-logo-nav" src="<?php echo get_template_directory_uri()?>/img/mini-logo nave.png"  alt=""></a>
						<ul class="navbar-nav mt-2 mt-lg-0 ml-auto ">
							<li class="nav-item">
								<a class="nav-link color-white" href="/landing">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link color-white" href="#">Casino</a>
							</li>
							<li class="nav-item">
								<a class="nav-link color-white" href="/galery">Galery</a>
							</li>
							<li class="nav-item">
								<a class="nav-link color-white" href="/Blog">Blog</a>
							</li>
							<li class="nav-item">
								<a class="nav-link color-white" href="#">Rooms</a>
							</li>
							<li class="nav-item">
								<a class="nav-link color-white" href="#">Spa</a>
							</li>
							<li class="nav-item">
								<a class="nav-link color-white" href="http://localhost/contact/">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>