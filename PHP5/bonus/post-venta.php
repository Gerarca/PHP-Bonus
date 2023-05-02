<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Post Venta ";
      include 'includes/head.php';
    ?>

</head>
<body>
    <div class="page-wrapper">
      <?php
        include 'includes/header.php';
      ?>

      <main class="main">

        <div class="page-banner-wrap">
        <?php
            $resultstores = mysql_query("SELECT * from post_venta_portada");
            while ($rowCliente = mysql_fetch_array($resultstores))
            { 
                ?>
                <img src="<?php echo $raiz_web.'/public/portada/'.$rowCliente["imagen"] ?>" alt="Post-Venta banner" class="img-fluid" loading="lazy">
                <?php
            }
        ?>          
        </div>

        <div class="container page-header-title">
            <h1>Post Venta</h1>
        </div>

          <div class="about-section">
              <div class="container">
                  <h2 class="subtitle"></h2>
                  <div class="row mb-5">

                    <div class="col-md-7">
                      <p>Todos los productos comercializados por <strong>Bonus</strong> tienen hasta 12 meses de garantía y Servicio Técnico <strong>autorizado por Samsung</strong>, proporcionado a través de ANOVO, empresa del Grupo Rahal.</p>
                      <p>De esta manera, se garantiza que los usuarios finales de los productos Samsung tengan la mejor experiencia de compra y uso de los mismos.</p>
                    </div>
                    <div class="col-md-5">
                      <img src="assets/images/anovo-logo2.png" loading="lazy">
                    </div>
                  </div>
                  <div class="uk-child-width-1-1 uk-child-width-expand@m mb-5" data-uk-grid data-uk-scrollspy="target:.tw-element; cls:uk-animation-slide-top-small; delay: 300;">
                      <div>
                          <div class="tw-element tw-box layout-2 custom-typography uk-margin-bottom">
                              <i class="icon-direction uk-border-circle layout-2"></i>
                              <h4>Dirección</h4>
                              <p class="description">
                                  <a href="https://goo.gl/maps/ns5ZL43dNpoxXmpu7" target="_blank">Avda. España N° 203 c/ Santísimo Sacramento</a>
                              </p>
                          </div>
                      </div>
                      <div>
                          <div class="tw-element tw-box layout-2 custom-typography uk-margin-remove-top uk-margin-bottom">
                              <i class="icon-phone uk-border-circle layout-2"></i>
                              <h4>Teléfono</h4>
                              <p class="description">
                                  <a href="tel:0217289776">021 728 9776</a>
                              </p>
                          </div>
                      </div>
                      <div>
                          <div class="tw-element tw-box layout-2 custom-typography uk-margin-remove-top">
                              <i class="icon-clock uk-border-circle layout-2"></i>
                              <h4>Horario de atención</h4>
                              <p class="description">
                                  <a href="https://goo.gl/maps/ns5ZL43dNpoxXmpu7" target="_blank">Lunes a Viernes de 8:00 a 18:00 / Sábados de 8:30 a 13:00</a>
                              </p>
                          </div>
                      </div>
                      </div>

                        <div id="map">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14430.15020782536!2d-57.587617!3d-25.2861375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd39d55a01a6847ff!2sAnovo+Paraguay!5e0!3m2!1ses-419!2spy!4v1562006583248!5m2!1ses-419!2spy" width="100%" height="100%" frameborder="0" style="border:0"  loading="lazy" allowfullscreen></iframe>
                        </div>

              </div><!-- End .container -->
          </div>


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
