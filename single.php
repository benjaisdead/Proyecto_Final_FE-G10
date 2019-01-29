<?php get_header() ?>
<section class="blog_home">
  <div class="blog_home_bg col-lg-6">
    <div class="blog_home__logo">
      <img src="<?php bloginfo('template_url') ?>/assets/images/logo.png" class="blog_home__logo-img" alt="Logo Benjamín Ortega">
      <img src="<?php bloginfo('template_url') ?>/assets/images/blog.png" alt="Contacto" class="blog_home__title-img">
      </div>
  </div>
</section>
<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
<div class="clearfix">
	<div class="single_post__thumbnail col-lg-offset-2 col-lg-8">
		<?php the_post_thumbnail() ?>
	</div>
<div class="single_post__content col-lg-8 col-lg-offset-2">
<h1 style="text-align: center; color: #F11574;"><?php the_title() ?></h1>

<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
<p><?php the_content() ?></p>

</div>
</div>


	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>


<?php get_footer() ?>
