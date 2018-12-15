<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proyecto-final
 */

get_header();
?>

<main id="main" class="site-main">
	<section id="mainHeader" class="main-header">
		<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="" class="img img-fluid img-logo-header">
	</section>

	<section id="rooms">
		<div class="container-fluid">
			<div class="text-center">
				<h2>Rooms</h2>
			</div>
		</div>

		<div class="container-fluid">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="container">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-md-6">
									<img class="d-block w-100 h-100" src="<?php echo get_template_directory_uri()?>/img/room2.jpg" alt="First slide">
								</div>
								<div class="col-md-6">
									<h2 class="text-center">Room name</h2>
									<div class="container-description">
										<ul>
											<li>Lorem ipsum dolor sit amet.</li>
											<li>Lorem ipsum dolor sit amet.</li>
											<li>Lorem ipsum dolor sit amet.</li>
										</ul>
									</div>
									<div class="icons-container">
										<i class="fab fa-accessible-icon"></i>
										<i class="fas fa-wifi"></i>
										<i class="fas fa-bath"></i>
										<i class="fas fa-cat"></i>
									</div>
									<div class="container-button">
										<button class="btn btn-warning m0a">Book room</button>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-6">
									<img class="d-block w-100 h-100" src="<?php echo get_template_directory_uri()?>/img/room3.png" alt="First slide">
								</div>
								<div class="col-md-6">
									<h2 class="text-center">Room name</h2>
									<div class="container-description">
										<ul>
											<li>Lorem ipsum dolor sit amet.</li>
											<li>Lorem ipsum dolor sit amet.</li>
											<li>Lorem ipsum dolor sit amet.</li>
										</ul>
									</div>
									<div class="icons-container">
										<i class="fab fa-accessible-icon"></i>
										<i class="fas fa-wifi"></i>
										<i class="fas fa-bath"></i>
										<i class="fas fa-cat"></i>
									</div>
									<div class="container-button">
										<button class="btn btn-warning m0a">Book room</button>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-6">
									<img class="d-block w-100 h-100" src="<?php echo get_template_directory_uri()?>/img/room1.png" alt="First slide">
								</div>
								<div class="col-md-6">
									<h2 class="text-center">Room name</h2>
									<div class="container-description">
										<ul>
											<li>Lorem ipsum dolor sit amet.</li>
											<li>Lorem ipsum dolor sit amet.</li>
											<li>Lorem ipsum dolor sit amet.</li>
										</ul>
									</div>
									<div class="icons-container">
										<i class="fab fa-accessible-icon"></i>
										<i class="fas fa-wifi"></i>
										<i class="fas fa-bath"></i>
										<i class="fas fa-cat"></i>
									</div>
									<div class="container-button">
										<button class="btn btn-warning m0a">Book room</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="container-fluid text-center">
			<button class="btn btn-default m0a dflex">More rooms</button>
		</div>

	</section>

	<section id="services">

		<div class="container-fluid ">
			<h2 class="text-center color-white">Services</h2>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="big-card background-white">
						<div class="big-card-image-container text-center">
							<img src="<?php echo get_template_directory_uri()?>/img/casino.jpeg" alt="" class="img img-big-card">
						</div>
						<div class="big-card-text-container text-center">
							<h2>Casino</h2>
							<p>Come play and win great prizes!</p>
						</div>
						<div class="big-card-button-container text-center">
							<button class="btn btn-warning">Watch more</button>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="small-card background-white">
								<div class="small-card-image-container text-center">
									<img src="<?php echo get_template_directory_uri()?>/img/casino.jpeg" alt="" class="img img-small-card">
								</div>
								<div class="small-card-text-container text-center">
									<h2>Casino</h2>
									<p>Come play and win great prizes!</p>
								</div>
								<div class="small-card-button-container text-center">
									<button class="btn btn-warning">Watch more</button>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="small-card background-white">
								<div class="small-card-image-container text-center">
									<img src="<?php echo get_template_directory_uri()?>/img/casino.jpeg" alt="" class="img img-small-card">
								</div>
								<div class="small-card-text-container text-center">
									<h2>Casino</h2>
									<p>Come play and win great prizes!</p>
								</div>
								<div class="small-card-button-container text-center">
									<button class="btn btn-warning">Watch more</button>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="small-card background-white">
								<div class="small-card-image-container text-center">
									<img src="<?php echo get_template_directory_uri()?>/img/casino.jpeg" alt="" class="img img-small-card">
								</div>
								<div class="small-card-text-container text-center">
									<h2>Casino</h2>
									<p>Come play and win great prizes!</p>
								</div>
								<div class="small-card-button-container text-center">
									<button class="btn btn-warning">Watch more</button>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="small-card background-white">
								<div class="small-card-image-container text-center">
									<img src="<?php echo get_template_directory_uri()?>/img/casino.jpeg" alt="" class="img img-small-card">
								</div>
								<div class="small-card-text-container text-center">
									<h2>Casino</h2>
									<p>Come play and win great prizes!</p>
								</div>
								<div class="small-card-button-container text-center">
									<button class="btn btn-warning">Watch more</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="location">
		<div class="container-services-title">
			<div class="container-fluid">
				<h2 class="text-center">Location</h2>
			</div>
		</div>
		<div id="map"></div>
	</section>

</main><!-- #main -->


<?php
get_footer();