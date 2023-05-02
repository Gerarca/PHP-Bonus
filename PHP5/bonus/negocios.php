<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $page = "Negocios ";
  include 'includes/head.php';
  ?>
</head>
<body>
  <div class="page-wrapper">
    <?php
    include 'includes/header.php';
    ?>

    <main class="main">

      <div class="banners-carousel owl-carousel owl-theme">
        <?php
            $resultstores = mysql_query("SELECT * from negocios_portada");
            while ($rowCliente = mysql_fetch_array($resultstores))
            { 
                ?>
                  <div class="">
                    <img data-src="<?php echo $raiz_web.'/public/portada/'.$rowCliente["imagen"] ?>" alt="Negocios banner" class="owl-lazy">
                  </div>
                <?php
            }
        ?>
      </div>

      <div class="container page-header-title">
        <h1>Negocios</h1>
      </div>

      <div class="features-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 order-lg-2" style="display:flex;justify-content:center;align-items:center">
              <div class="marca-box marca-logo" style="">
                <img src="assets/images/samsung-logo.svg" alt="Samsung">
                <div class="marca-box-content">
                  <p>Gracias al éxito de su negocio de productos electrónicos, Samsung se ha ganado el reconocimiento
                    a nivel mundial como líder en tecnología del sector y se encuentra ahora entre las 10 principales marcas
                    del mundo.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-6">
                  <div class="marca-box">
                    <a href="javascript:void(0)">
                      <div class="lineas-carousel owl-carousel owl-theme">
                        <img data-src="assets/images/SM-S906_GalaxyS22Plus_FrontL30_Green.jpg" class="owl-lazy" alt="Galaxy S22 Plus">
                        <img data-src="assets/images/SM-S908_GalaxyS22Ultra_DevicePenFrontL30_Burgundy.jpg" class="owl-lazy" alt="Galaxy S22 Ultra">
                        <img data-src="assets/images/180_SM-G990_S21FE_BackFront_LV_Thumbnail.png" class="owl-lazy" alt="Galaxy S21 FE">
                        <img data-src="assets/images/EF-DX900_007_Standing5_Black.jpg" class="owl-lazy" alt="Tablet">
                      </div>
                      <div class="marca-box-content">
                        <h3>Línea Mobile</h3>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="marca-box">
                    <a href="javascript:void(0)">
                      <div class="lineas-carousel owl-carousel owl-theme">
                        <img data-src="assets/images/RF71A9671SG-PE_001_Front_Black.png" class="owl-lazy" alt="Línea Blanca">
                        <img data-src="assets/images/Negocios-Lineablanca2.png" class="owl-lazy" alt="Línea Blanca">
                        <img data-src="assets/images/Negocios-Lineablanca3.png" class="owl-lazy" alt="Línea Blanca">
                      </div>
                      <div class="marca-box-content">
                        <h3>Línea Blanca</h3>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="marca-box">
                    <a href="pantallas-profesionales">
                      <img src="assets/images/tvpro.jpg" loading="lazy" alt="Pantallas Profesionales">
                      <div class="marca-box-content">
                        <h3>Pantallas Profesionales</h3>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="marca-box">
                    <a href="javascript:void(0)">
                      <div class="lineas-carousel owl-carousel owl-theme">
                        <img data-src="assets/images/anafe.png" class="owl-lazy" alt="Empotrables">
                        <img data-src="assets/images/HDC9A90TX-EUR_002_Right-Angle.png" class="owl-lazy" alt="Empotrables">
                        <img data-src="assets/images/NV75K5541RS_001_Front_Silver.png" class="owl-lazy" alt="Empotrables">
                      </div>
                      <div class="marca-box-content">
                        <h3>Empotrables</h3>
                      </div>
                    </a>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="features-section">
        <hr class="m-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mb-lg-0 mb-2" style="display:flex;justify-content:center;align-items:center">
              <div class="marca-box shadow-none marca-logo p-lg-5 p-2">
                <img src="assets/images/Continental_logo-naranja.png" alt="Continental" loading="lazy" width="180" height="90">
                <div class="marca-box-content">
                  <p class="lead">
                    <i>Momentos inolvidables en familia gracias al aliado perfecto en la cocina.</i>
                  </p>
                  <p class="text-left">
                    El mundo está cada vez más ágil y más conectado, lo que hace que los momentos con familiares y amigos sean aún más valiosos. Esta es una de las principales razones por las que los productos de Continental tienen como principal objetivo contribuir a hacer más práctica y sencilla la rutina doméstica, para que ganes tiempo para disfrutar de las cosas buenas de la vida en familia.
                  </p>
                  <p class="text-left">
                    Comidas rápidas a diario, recetas para disfrutar el domingo con toda la familia y amigos, esa cocina de ensueño: siempre limpia y bonita, electrodomésticos fáciles de instalar, usar y limpiar. Cada producto fue desarrollado y probado con esta misión: practicidad, comodidad, belleza y durabilidad.
                  </p>
                  <p class="text-left">
                    Continental es el aliado perfecto en la cocina, que te ayuda a construir momentos inolvidables en familia y con amigos.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-12 p-lg-4 p-2">
              <div class="negocios-carousel owl-carousel owl-theme owl-dots-top" >
                <div class="product">
                  <figure class="product-image-container">
                    <img class="owl-lazy" data-src="assets/images/FC4CS_1.jpg">
                  </figure>
                  <div class="product-details action-inner mt-10">
                    <h5 class="subtitle"></h5>
                  </div>
                </div><!-- End .product -->
                <div class="product">
                  <figure class="product-image-container">
                    <img class="owl-lazy" data-src="assets/images/Negocios-Continental-Microondas.png">
                  </figure>
                  <div class="product-details action-inner mt-10">
                    <h5 class="subtitle"></h5>
                  </div>
                </div><!-- End .product -->
                <div class="product">
                  <figure class="product-image-container">
                    <img class="owl-lazy" data-src="assets/images/Negocios-Continental-Heladera.png">
                  </figure>
                  <div class="product-details action-inner mt-10">
                    <h5 class="subtitle"></h5>
                  </div>
                </div><!-- End .product -->
                <div class="product">
                  <figure class="product-image-container">
                    <img class="owl-lazy" data-src="assets/images/TC41S_1.jpg">
                  </figure>
                  <div class="product-details action-inner mt-10">
                    <h5 class="subtitle"></h5>
                  </div>
                </div><!-- End .product -->
                <div class="product">
                  <figure class="product-image-container">
                    <img class="owl-lazy" data-src="assets/images/Negocios-Continental-Campanas.png">
                  </figure>
                  <div class="product-details action-inner mt-10">
                    <h5 class="subtitle"></h5>
                  </div>
                </div><!-- End .product -->
                <div class="product">
                  <figure class="product-image-container">
                    <img class="owl-lazy" data-src="assets/images/KC4GP_1.jpg">
                  </figure>
                  <div class="product-details action-inner mt-10">
                    <h5 class="subtitle"></h5>
                  </div>
                </div><!-- End .product -->
                <div class="product">
                  <figure class="product-image-container">
                    <img class="owl-lazy" data-src="assets/images/OC8EP_1.jpg">
                  </figure>
                  <div class="product-details action-inner mt-10">
                    <h5 class="subtitle"></h5>
                  </div>
                </div><!-- End .product -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="m-0">
      <div class="about-section">
        <div class="container" style="">
          <h2 class="subtitle">Pantallas Profesionales LFD</h2>
          <div class="row">
            <div class="col-md-6">
              <p class="lead"><i>Soluciones innovadoras en un mercado exigente</i></p>
              <p>Desde nuestro rol como Distribuidores desarrollamos a nuestros partners tecnológicos para que puedan abordar un negocio B2B con soluciones innovadoras en un mercado con alta demanda del producto.</p>
              <p>El desarrollo y la innovación constante de la marca nos brinda la posibilidad de abordar prácticamente cualquier vertical y para eso trabajamos muy fuertemente acompañando a los Integradores IT en todo el proceso del negocio.</p>
              <p>Las pantallas profesionales son un eslavon ineludible en el proceso de transformación digital llevado adelante por empresas, corporaciones y clientes.</p>
              <p>En tiempos en los que la experiencia del cliente lo es todo, y buena parte de esa experiencia pasa por lo que se ve, el negocio de la comunicación digital continuará creciendo por mucho tiempo!</p>

            </div>
            <div class="col-md-6">
              <img src="assets/images/Negocios-Pantallas.jpg" loading="lazy">
            </div>

            <div class="col-12 text-center mt-60" >
              <h3 class="subtitle">Integradores con los que trabajamos</h3>
              <div id="grid_clientes" class="row row-sm">

                <?php

                $resultIntegradores = mysql_query("SELECT * FROM integradores ORDER BY id DESC");
                while($rowIntegrador = mysql_fetch_array($resultIntegradores)){
                  ?>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="product">
                      <figure class="product-image-container">
                        <a href="<?= $rowIntegrador['enlace'] ?>" class="product-image" target="_blank">
                          <img src="<?= $raiz ?>public/integradores/<?= $rowIntegrador['logo'] ?>" loading="lazy">
                        </a>
                      </figure>
                    </div><!-- End .product -->
                  </div><!-- End .col-lg-2 -->
                  <?php
                }
                ?>

              </div><!-- End .row -->
            </div>
          </div>
        </div><!-- End .container -->
      </div>
      <!-- <hr> -->
      <p>&nbsp;</p>




      <div class="mb-8"></div>
    </main>
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
  <script type="text/javascript">
  $('.banners-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    lazyLoad: true,
    items:1,
    animateOut: 'fadeOut',
    nav: true,
    navText: ['<i class="icon-left-open-big">', '<i class="icon-right-open-big">'],
    dots: false,
    autoplayTimeout:10000,
    margin: 0
  });
  $('.lineas-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    lazyLoad: true,
    items:1,
    nav: true,
    navText: ['<i class="icon-left-open-big">', '<i class="icon-right-open-big">'],
    dots: false,
    margin: 0
  });

  $('.negocios-carousel').owlCarousel({
    loop: false,
    autoplay: true,
    lazyLoad: true,
    nav: true,
    navText: ['<i class="icon-left-open-big">', '<i class="icon-right-open-big">'],
    dots: false,
    autoplayHoverPause: true,
    margin: 20,
    responsive: {
      0: {
        items: 2,
        margin: 0,
        loop:true
      },
      480: {
        items: 2,
        loop:true
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      },
      1200: {
        items: 4
      }
    }
  })
  </script>
</body>
</html>
