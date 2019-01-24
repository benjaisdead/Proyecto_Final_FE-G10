<?php get_header() ?>
  <!-- Home Section -->
<section class="main_home">
    <div class="main_home__bg">
      <div class="col-lg-6">
        <div class="main_home__text">
            <img src="<?php bloginfo('template_url') ?>/assets/images/name.png" class="main_home__text-name"alt="Nombre Benjamín Ortega">
              <h1>PUBLICISTA &</h1>
              <h2>DESARROLLADOR FRONT END</h2>
              <a href="#skills" class="main_btn main_home__btn">SOBRE MÍ</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="main_home__logo">
          <img src="<?php bloginfo('template_url') ?>/assets/images/logo.png" class="main_home__logo-img" alt="Logo Benjamín Ortega">
        </div>
      </div>
    </div>
  <!-- Skills Section -->
<section class="main_skills" id="skills">
  <div class="main_skills__bg">
    <h1>SKILLS</h1>
    <div class="col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-4">
      <i class="flaticon-html"></i>
      <h3 class="main_skills__titles">HTML5</h3>
      <div id="main_skills__bar-html"></div>
      <i class="flaticon-css"></i>
      <h3 class="main_skills__titles">CSS3</h3>
      <div id="main_skills__bar-css"></div>
      <i class="flaticon-javascript"></i>
      <h3 class="main_skills__titles">JQUERY / JS</h3>
      <div id="main_skills__bar-js"></div>
    </div>
    <div class="col-lg-offset-2 col-lg-4 col-md-offset-1 col-md-4">
      <i class="flaticon-photoshop"></i>
      <h3 class="main_skills__titles">PHOTOSHOP</h3>
      <div id="main_skills__bar-ps"></div>
      <i class="flaticon-illustrator"></i>
      <h3 class="main_skills__titles">ILLUSTRATOR</h3>
      <div id="main_skills__bar-ai"></div>
      <i class="flaticon-after-effects"></i>
      <h3 class="main_skills__titles">AFTER EFFECTS</h3>
      <div id="main_skills__bar-ae"></div>
    </div>
  </div>
</section>

  <!-- Services -->
<section class="main_services">
  <div class="main_services__bg">
    <h1>SERVICIOS</h1>
    <div class="col-lg-6 col-md-6">
      <i class="flaticon-web-design"></i>
      <h2>DESARROLLO WEB</h2>
      <i class="flaticon-sketchbook"></i>
      <h2>IDENTIDAD CORPORATIVA</h2>
    </div>
    <div class="col-lg-6 col-md-6">
      <i class="flaticon-idea"></i>
      <h2>GESTIÓN CULTURAL</h2>
      <i class="flaticon-smartphone"></i>
      <h2>REDES SOCIALES</h2>
    </div>
  </div>
</section>
<?php get_footer() ?>
