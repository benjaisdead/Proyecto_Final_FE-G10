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
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Nombre:</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su nombre">
          </div>
            <div class="form-group">
              <label for="exampleFormControlInput2">Email:</label>
              <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="nombre@mail.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput2">Teléfono:</label>
              <input type="phone" class="form-control" id="exampleFormControlInput3" placeholder="Ingrese su teléfono">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Texto:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
             <button type="submit" class="main_btn contact_form__btn">Enviar</button>
          </form>
      </div>
    </div>
  </section>


<?php get_footer() ?>
