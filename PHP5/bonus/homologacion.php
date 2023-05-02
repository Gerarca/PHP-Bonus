<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Homologación y Garantía ";
      include 'includes/head.php';
    ?>

</head>
<body>
    <div class="page-wrapper">
      <?php
        include 'includes/header.php';
      ?>

      <main class="main">

        <!-- <div class="page-header page-header-bg" style="background-image: url('assets/images/sunrise.jpg');">
        </div> -->
        <div class="page-banner-wrap">
        <?php
            $resultstores = mysql_query("SELECT * from homologacion_portada");
            while ($rowCliente = mysql_fetch_array($resultstores))
            { 
                ?>
                <img src="<?php echo $raiz_web.'/public/portada/'.$rowCliente["imagen"] ?>" alt="Homologación banner" class="img-fluid" loading="lazy">
                <?php
            }
        ?>          
        </div>
        <div class="container page-header-title">
            <h1>Homologación y Garantía</h1>
        </div>

        <div class="about-section" style="padding: 0;">
          <div class="container">
              <div class="row justify-content-center align-items-center">
                  <div class="col-sm-6 col-md-5 ptb-20">
                      <video src="assets/images/homologacion-sub.mov" autoplay muted loop controls>

                      </video>
                  </div>
                  <div class="col-sm-6 col-md-5 ptb-20">
                      <h2 class="subtitle text-left">¿Qúe son los productos homologados?</h2>
                      <p>Un teléfono homologado es aquel que cumple con todos los requerimientos de la CONATEL para una conexión optima con las operadoras locales.
                        Nosotros importamos con exclusividad estos dispositivos, por lo que Samsung respalda la garantía de nuestros productos.</p>
                  </div>
              </div>
              <!-- <p class="lead">Traemos la mejor innovación en tecnología al país.</p> -->
          </div><!-- End .container -->
        </div>

        <p>&nbsp;</p>

        <div class="about-section bg1">
            <div class="container" style="text-align:center">
                <h2 class="subtitle">Garantía Extendida</h2>
                <p>Si adquiriste un producto oficial, Samsung te ofrece una garantía.</p>
                <h4><a href="https://www.samsung.com/py/support/warranty/" target="_blank" class="btn btn-link subtitle">Click aquí para mayor información.</a></h4>

                <!-- <p class="lead">Traemos la mejor innovación en tecnología al país.</p> -->
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
    <script src="assets/js/uikit.min.js"></script>


</body>
</html>
