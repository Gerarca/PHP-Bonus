<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Contacto ";
      include 'includes/head.php';
    ?>
</head>
<body>
    <div class="page-wrapper">
      <?php
        include 'includes/header.php';
      ?>

      <main class="main">
      <?php
            $resultstores = mysql_query("SELECT * from contacto_portada");
            while ($rowCliente = mysql_fetch_array($resultstores))
            { 
                ?>
                    <div class="page-header page-header-bg" style="background-image: url('<?php echo $raiz_web.'/public/portada/'.$rowCliente["imagen"] ?>');">
                    </div>
                <?php
            }
        ?>
        <div class="container page-header-title">
            <h1>Contacto</h1>
        </div>

          <div class="container">


              <div class="row">
                  <div class="col-md-7">
                      <h2 class="light-title"><strong>Formulario de Contacto</strong></h2>

                      <form action="#">
                          <div class="form-group required-field">
                              <label for="contact-name">Nombre</label>
                              <input type="text" class="form-control" id="contact-name" name="contact-name" required>
                          </div><!-- End .form-group -->

                          <div class="form-group required-field">
                              <label for="contact-email">Email</label>
                              <input type="email" class="form-control" id="contact-email" name="contact-email" required>
                          </div><!-- End .form-group -->

                          <div class="form-group">
                              <label for="contact-phone">Teléfono</label>
                              <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
                          </div><!-- End .form-group -->
                          <div class="form-group">
                              <label for="contact-asunto">Asunto</label>
                              <input type="text" class="form-control" id="contact-asunto" name="contact-asunto" required>
                          </div><!-- End .form-group -->

                          <div class="form-group required-field">
                              <label for="contact-message">Mensaje</label>
                              <textarea cols="10" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                          </div><!-- End .form-group -->

                          <div class="form-footer">
                              <button type="submit" class="btn btn-primary">Enviar</button>
                          </div><!-- End .form-footer -->
                      </form>
                  </div><!-- End .col-md-8 -->

                  <div class="col-md-5">
                      <h2 class="light-title"><strong>Información</strong></h2>

                      <div class="contact-info">
                          <div>
                              <i class="icon-direction"></i>
                              <p><strong>Dirección</strong></p>
                              <p><a href="https://goo.gl/maps/rhzJEZN3ZBFTF7rC9">Av. Aviadores del Chaco c/ San Martin. Edificio Aymac</a></p>
                          </div>
                          <div>
                              <i class="icon-phone"></i>
                              <p><strong>Teléfono</strong></p>
                              <p><a href="tel:0994400900">0994 400 900</a></p>
                          </div>
                          <div>
                              <i class="icon-mail-alt"></i>
                              <p><strong>Email</strong></p>
                              <p><a href="mailto:consultas.ventas@bonus.com.py">consultas.ventas@bonus.com.py</a></p>
                          </div>
                          <div>
                              <i class="icon-clock"></i>
                              <p><strong>Horario de atención</strong></p>
                              <p><a href="https://goo.gl/maps/rhzJEZN3ZBFTF7rC9">Lunes a Viernes de 8:00 a 18:00</a></p>
                          </div>

                      </div><!-- End .contact-info -->
                  </div><!-- End .col-md-4 -->
              </div><!-- End .row -->

              <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7214.827697852115!2d-57.5779369!3d-25.2902961!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da8a0cdc3f525%3A0x447540adfd90b2e4!2sEdificio+Aymac%2C+Roque+Centuri%C3%B3n+Miranda%2C+Asunci%C3%B3n!5e0!3m2!1ses!2spy!4v1561490735851!5m2!1ses!2spy" width="100%" height="100%" frameborder="0" style="border:0" loading="lazy" allowfullscreen></iframe>
              </div>
          </div><!-- End .container -->

          <div class="mb-8"></div><!-- margin -->
      </main><!-- End .main -->
      <?php
        include 'includes/footer.php';
      ?>


    </div>

    <?php
      include 'includes/menu.php';
    ?>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
    <?php
      include 'includes/scripts.php';
    ?>

</body>
</html>
