<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Benjamín Ortega - Inicio</title>
		<!-- Meta -->
		<meta charset="<?php bloginfo('charset') ?>">
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<?php get_template_part('_includes/iOS', 'icons') ?>


		<?php wp_head() ?>
</head>
<body>

  <!-- Navbar / Head -->
<header>
  <nav class="main_nav">
  <div class="main_nav__hamb">
    <a href="#" class="main_nav__hamb-link"><img src="<?php bloginfo('template_url') ?>/assets/images/hamb.svg" class="main_nav__hamb-img" alt="Despliegue de menú"></a>
  </div>
  <ul class="main_nav__elements">
    <li class="main_nav__list"><a href="index.html" class="main_nav__link">INICIO</a></li>
    <li class="main_nav__list"><a href="portfolio.html" class="main_nav__link">PORTAFOLIO</a></li>
    <li class="main_nav__list"><a href="blog.html" class="main_nav__link">BLOG</a></li>
    <li class="main_nav__list"><a href="contact.html" class="main_nav__link">CONTACTO</a></li>
  </ul>
</nav>
</header>
