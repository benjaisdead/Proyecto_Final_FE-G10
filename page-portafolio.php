<?php /* Template Name: Portfolio */ ?>
<?php get_header() ?>
<!-- Home Section -->
<section class="portfolio_home">
<div class="portfolio_home__bg">
  <div class="portfolio_home__logo">
    <img src="<?php bloginfo('template_url') ?>/assets/images/logo.png" class="portfolio_home__logo-img" alt="Logo Benjamín Ortega">
    <img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-title.png" alt="Portafolio" class="portfolio_home__title-img">
    </div>
    <div class="portfolio_home__clients">
      <p class="portfolio_home__counter portfolio_home__counter-first">7</p>
      <p class="portfolio_home__counter-text">Clientes</p>
    </div>
      <div class="portfolio_home__projects">
        <p class="portfolio_home__counter portfolio_home__counter-second">18</p>
        <p class="portfolio_home__counter-text">Proyectos</p>
      </div>
</div>
</section>

<!-- Portfolio Items -->
<section class="portfolio_items">
<div class="col-lg-6 col-md-6 col-sm-12">
  <div class="bxslider-1">
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-acv.jpg"></div>
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-acv2.jpg"></div>
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-acv3.jpg"></div>
  </div>
</div>
<div class="portfolio_text__container col-lg-6 col-md-6 col-sm-12">
  <div class="portfolio_items__text-first">
    <h1>AC VERTICAL</h1>
    <h2>Ingeniería, Arquitectura y Medio Ambiente.</h2>
    <a href="www.acvertical.cl" class="second_btn portfolio_items__text-btn">VISITAR SITIO</a>
  </div>
</div>
</section>
<section class="portfolio_items__second">
<div class="col-lg-6 col-md-6 col-sm-12">
  <div class="portfolio_items__text-first">
    <h1>CLEVELAND CONSULTORES</h1>
    <h2>Ingeniería, Electricidad y Telecomunicaciones.</h2>
    <a href="www.clevelandst.com" class="second_btn portfolio_items__text-btn">VISITAR SITIO</a>
  </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
  <div class="bxslider-2">
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-cle1.jpg"></div>
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-cle2.jpg"></div>
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-cle3.jpg"></div>
  </div>
</div>
</section>

<section class="portfolio_items__third">
<div class="col-lg-6 col-md-6 col-sm-12">
  <div class="bxslider-3">
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-cc1.jpg"></div>
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-cc2.jpg"></div>
    <div><img src="<?php bloginfo('template_url') ?>/assets/images/portfolio-slider-cc3.jpg"></div>
  </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
  <div class="portfolio_items__text-first">
    <h1>COMERCIAL CENIT</h1>
    <h2>Distribución de Combustibles.</h2>
    <a href="www.comercialcenit.cl" class="second_btn portfolio_items__text-btn">VISITAR SITIO</a>
  </div>
</div>
</section>
<?php get_footer() ?>
