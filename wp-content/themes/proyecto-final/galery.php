<?php /* Template Name: Galery*/?>

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



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
  <img class="img-galery" src="<?php echo get_template_directory_uri()?>/img/room1.png" alt="">
  <div class="carousel-caption d-none d-md-block">
    <h5>Photo 1</h5>
  </div>
</div>
    <div class="carousel-item">
  <img class="img-galery" src="<?php echo get_template_directory_uri()?>/img/room2.jpg" alt="">
  <div class="carousel-caption d-none d-md-block">
  <h5>Photo 2</h5>
  </div>
</div>
<div class="carousel-item">
  <img class="img-galery" src="<?php echo get_template_directory_uri()?>/img/room3.png" alt="">
  <div class="carousel-caption d-none d-md-block">
  <h5>Photo 3</h5>
  </div>
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
get_footer();
?>