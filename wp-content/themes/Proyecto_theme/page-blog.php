<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

<section class="blog_home">
  <div class="blog_home_bg col-lg-6">
    <div class="blog_home__logo">
      <img src="<?php bloginfo('template_url') ?>/assets/images/logo.png" class="blog_home__logo-img" alt="Logo Benjamín Ortega">
      <img src="<?php bloginfo('template_url') ?>/assets/images/blog.png" alt="Contacto" class="blog_home__title-img">
      </div>
  </div>
</section>

	<article class="clearfix">

		<?php
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="post_content col-lg-offset-2 col-lg-8">
      <div class="post_thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>

      <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
      <?php the_date(); ?>
    </div>


		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

<?php get_footer(); ?>
