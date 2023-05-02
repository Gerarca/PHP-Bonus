<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Por qué elegirnos ";
      include 'includes/head.php';
    ?>
</head>
<body id="razones">
    <div class="page-wrapper">
      <?php
        include 'includes/header.php';
      ?>

      <main class="main">

            <div class="page-banner-wrap">
              <?php
                $resultstores = mysql_query("SELECT * from razones_portada");
                while ($rowCliente = mysql_fetch_array($resultstores))
                { 
                    ?>
                    <img src="<?php echo $raiz_web.'/public/portada/'.$rowCliente["imagen"] ?>" alt="Por qué elegirnos banner" class="img-fluid" loading="lazy">
                    <?php
                }
              ?>              
            </div>
            <div class="container page-header-title">
                <h1>Por qué elegirnos</h1>
            </div>

            <div class="about-section">
              <div class="container">
                  <h2 class="subtitle"></h2>

                  <p>Los productos que comercializamos son adquiridos a través de las oficinas locales de Samsung Electronics Paraguay y nos llegan directamente desde las fábricas (sin intermediarios). </p>

                  <p>Las dos líneas de productos que manejamos son Mobile (Smartphones y Tabletas) y Línea Blanca (Heladeras, Lavarropas, Aires Acondicionados, Aspiradoras, Microondas, Lavavajillas y a partir de marzo, hornos empotrables, anafes y campanas).</p>
                  <p>Todos son 100% nuevos y originales, habilitados y homologados para Paraguay. </p>

                  <p>En el caso de MOBILE, ofrecemos hasta 12 meses de garantía y pos venta, a través de los distintos centros de servicio técnico autorizado por Samsung (ANOVO, SMART, WICOM).</p>

                  <p>En el caso de Línea Blanca también tenemos nuestra red de servicio técnico y dependiendo del producto, ofrecemos hasta 10 años de garantía.</p>

                  <p class="lead">Cubrimos más de 1.500 puntos de ventas por medio de nuestros 600 clientes distribuídos por todo el territorio paraguayo.</p>
              </div>
          </div>

              <div class="features-section">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-4">
                           <div class="feature-box">
                               <img src="assets/images/route.svg" loading="lazy" alt="">

                               <div class="feature-box-content">
                                   <h3>Nuestra Trayectoria</h3>
                                   <p>Bonus inicia la distribución en el 2012, respaldada por la 6ta. marca
                                    con mayor reconocimiento a nivel mundial: Samsung, otorgándonos la categoría de celulares.
                                    En el 2016, iniciamos la línea de electrodomésticos y pantallas profesionales.
                                    Somos una empresa joven con remarcables victorias.</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4">
                         <div class="feature-box">
                           <img src="assets/images/idea.svg" loading="lazy" alt="">
                           <div class="feature-box-content">
                             <h3>Nuestra Experiencia</h3>
                             <p>No sólo contamos con el Know How de inserción al mercado, sino que también nos enfocamos en las necesidades de nuestros clientes.
                            Hemos sido protagonistas en el posicionamiento de muchos de nuestros clientes en el mercado. Nuestros logros se fundan en nuestros casos
                            de éxitos.</p>
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-4">
                         <div class="feature-box">
                           <img src="assets/images/chat.svg" loading="lazy" alt="">
                           <div class="feature-box-content">
                             <h3>Nuestro Servicio</h3>
                             <p>Nuestros asesores de cuentas se encargan personalmente de administrar los productos de nuestras marcas con los encargados
                            respectivos. Nos ocupamos de los negocios de nuestras marcas con nuestros clientes, como si nosotros estuviésemos vendiendo
                            al consumidor final.</p>
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-4">
                         <div class="feature-box">
                           <img src="assets/images/check.svg" loading="lazy" alt="">
                           <div class="feature-box-content">
                             <h3>Calidad</h3>
                             <p>No sólo distribuimos marcas con reconocido respaldo internacional, además nos encargamos de que nuestros servicios cumplan con los más altos estándares de calidad.</p>
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-4">
                         <div class="feature-box">
                           <img src="assets/images/clipboard.svg" loading="lazy" alt="">
                           <div class="feature-box-content">
                             <h3>Garantía</h3>
                             <p>Brindamos la seguridad de que tanto los productos de Samsung, como los de la marca Blaupunkt cuentan en su mayoría con una garantía de al menos 1 año.</p>
                           </div>
                         </div>
                       </div>

                       <div class="col-lg-4">
                           <div class="feature-box">
                               <img src="assets/images/compromiso1.svg" loading="lazy" alt="">

                               <div class="feature-box-content">
                                   <h3>Nuestro Compromiso</h3>
                                   <p>Creemos que el crecimiento de nuestros clientes es el nuestro. Por eso estamos comprometidos con los objetivos y circunstancias de cada uno de ellos.</p>
                               </div><!-- End .feature-box-content -->
                           </div><!-- End .feature-box -->
                       </div><!-- End .col-lg-4 -->
                   </div><!-- End .row -->
               </div><!-- End .container -->
           </div><!-- End .features-section -->

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
