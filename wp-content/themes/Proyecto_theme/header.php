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
	<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array(
		'theme_location' => 'header-menu',
		'container' => null,
		'container_class' => 'main_nav__elements'
	 ) ); ?>
	<?php } ?>

</nav>
</header>
