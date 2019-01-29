<?php /* Template Name: Contacto */ ?>
<?php get_header() ?>
<!-- Home section -->
<section class="contact_home">
  <div class="contact_home_bg col-lg-6">
    <div class="contact_home__logo">
      <img src="<?php bloginfo('template_url') ?>/assets/images/logo.png" class="contact_home__logo-img" alt="Logo Benjamín Ortega">
      <img src="<?php bloginfo('template_url') ?>/assets/images/contact-title.png" alt="Contacto" class="blog_home__title-img">
      </div>
  </div>
</section>

<!-- Contact section -->
  <section class="contact_form">
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">


      <h1>Clientes</h1>
  <ul id="clientes"></ul>
</div>
    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
      <div class="contact_form__inputs">

          <?php echo do_shortcode('[contact-form-7 id="31" title="Formulario de contacto 1"]'); ?>
</div>
  </section>


<?php get_footer() ?>
