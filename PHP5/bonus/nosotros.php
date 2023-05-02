<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Nosotros ";
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
            $resultstores = mysql_query("SELECT * from quienes_somos_portada");
            while ($rowCliente = mysql_fetch_array($resultstores))
            { 
                ?>
                <img src="<?php echo $raiz_web.'/public/portada/'.$rowCliente["imagen"] ?>" alt="Nosotros banner" class="img-fluid" loading="lazy"> ';
                <?php
            }
        ?>
        
        <div class="container page-header-title">
            <h1>Nosotros</h1>
        </div>

            <div class="about-section">
              <div class="container" style="text-align:center">
                  <h2 class="subtitle">Bonus es optimismo y confiabilidad</h2>
                  <p>Somos Distribuidores oficiales para todo el territorio nacional de Smartphones y electrodomésticos (línea hogar). Trabajamos con los equipos locales de las marcas que distribuimos y nos proveemos directamente de fábrica, sin intermediarios.</p>
                  <p>Las marcas que nos dieron su voto de confianza son de las más reconocida a nivel regional y mundial:</p>
                  <p>Samsung, una de las 5 marcas más valiosas del mundo, para sus líneas Mobile (Tabletas y Smartphones) desde el 2012. A partir del 2016 hemos incluido en nuestro portafolio los productos de "Línea Blanca" (Heladeras, Lavarropas, Microondas, Aire Acondicionado, entre otros).</p>
                  <p>A mediados del 2020 tomamos la distribución exclusiva de la reconocida marca de electrodomésticos CONTINENTAL, comercializando toda la línea de productos recientemente lanzada al mercado sudamericano.</p>
                  <p>Trabajamos con las mejores tiendas y cadenas de tiendas de electrodomésticos y electrónica del país, cubriendo las diversas zonas con nuestro equipo comercial (contamos con vendedores que cubren todas las zonas y además con un equipo de televentas como soporte).</p>
                  <p>Nuestra oficina central está en Asunción (Av. Aviadores del Chaco) y contamos con un centro de distribución ubicado en Mariano Roque Alonso.</p>
                  <p class="lead">Nos enorgullece ofrecer la mejor tecnología e innovación a los exigentes consumidores paraguayos.</p>
              </div><!-- End .container -->
          </div>
          <p>&nbsp;</p>

          <section class="uk-section about-section bg1">
            <div class="container" style="text-align:center">
              <h2 class="subtitle">Nuestra Historia</h2>
              <p>Desde 1966, el Grupo Rahal ha experimentado un crecimiento constante identificando oportunidades de negocio y diversificando su portafolio de empresas.</p>

              <p>Con la experiencia del Grupo Rahal en el campo de la industria de telecomunicaciones y distribución plenamente consolidada, el Grupo decidió expandir sus actividades en este rubro estableciendo relaciones con Samsung, marca coreana que lidera indiscutiblemente el mercado de smartphones a nivel mundial. Fue así que se constituyó Bonus S.A. en el año 2012, dedicada a la importación y distribución oficial para Paraguay de productos Samsung en sus líneas de terminales móviles, cámaras digitales y tablets. A partir de junio de 2016, la empresa agregó a su portafolio la línea de electrodomésticos Samsung. Los productos son adquiridos a través de las oficinas locales de Samsung e importados directamente desde las diversas fábricas distribuidas por el mundo y homologados para su uso en el país.</p>
            </div>
              <div class="uk-container uk-container-xsmall">
                  <div data-uk-grid>
                      <div class="uk-width-1-1">
                          <div class="tw-timeline-container normal" data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-medium; delay: 300;">
                            <div class="tw-timeline-block">
                                <div class="tw-timeline-circle"></div>
                                <div class="tw-timeline-content">
                                    <h3 class="uk-text-uppercase">1966</h3>
                                    <p>Se funda <strong>Casa Amistad</strong>, uno de los primeros locales comerciales de Ciudad del Este.</p>
                                </div>
                            </div>
                            <div class="tw-timeline-block">
                              <div class="tw-timeline-circle"></div>
                              <div class="tw-timeline-content">
                                <h3 class="uk-text-uppercase">1986</h3>
                                <p>En el mismo predio de <strong>Casa Amistad</strong> se inaugura <strong>Galería Rahal</strong>, que con sus 75 salones comerciales se convierte en uno de los primeros shoppings de la <strong>Avenida San Blas</strong>. </p>
                              </div>
                            </div>
                            <div class="tw-timeline-block">
                                <div class="tw-timeline-circle"></div>
                                <div class="tw-timeline-content">
                                    <h3 class="uk-text-uppercase">1995</h3>
                                    <p>Se adquiere <strong>Hotel California</strong></p>
                                </div>
                            </div>
                              <div class="tw-timeline-block">
                                  <div class="tw-timeline-circle"></div>
                                  <div class="tw-timeline-content">
                                      <h3 class="uk-text-uppercase">2008</h3>
                                      <p>Se establece <strong>Fénix Trading Company</strong>, empresa dedicada a venta de terminales móviles y equipos electrónicos. Poco después firma con Nokia un contrato de distribución exclusiva para Paraguay y Bolivia. </p>
                                  </div>
                              </div>
                              <div class="tw-timeline-block">
                                  <div class="tw-timeline-circle"></div>
                                  <div class="tw-timeline-content">
                                      <h3 class="uk-text-uppercase">2009</h3>
                                      <p>Se adquiere <strong>A-NOVO</strong>, empresa dedicada al servicio post-venta y técnico de terminales móviles y equipos electrónicos. </p>
                                      <p><strong>Fénix Trading Company</strong> inicia operaciones en el mercado paraguayo para la distribución y posicionamiento de la marca <strong>Nokia</strong> en mayores retailers del país como Inverfin, González Giménez, Bristol y otros. </p>
                                      <p><strong>A-NOVO</strong> firma un contrato con <strong>Personal</strong> para el servicio técnico y post-venta.</p>
                                      <p>Se fundan <strong>Fénix Emprendimientos Inmobiliarios</strong> con el objetivo de desarrollar proyectos inmobiliarios en todo el país.</p>
                                      <p><strong>A-NOVO</strong> firma un contrato con <strong>Tigo-Millicom</strong> para el servicio técnico y de post-venta. </p>
                                  </div>
                              </div>
                              <div class="tw-timeline-block">
                                  <div class="tw-timeline-circle"></div>
                                  <div class="tw-timeline-content">
                                      <h3 class="uk-text-uppercase">2012</h3>
                                      <p><strong>Bonus</strong> inicia sus actividades mediante la firma de un contrato de distribución oficial de <strong>Samsung</strong> para su línea de teléfonos móviles en Paraguay.</p>
                                  </div>
                              </div>
                              <div class="tw-timeline-block">
                                  <div class="tw-timeline-circle"></div>
                                  <div class="tw-timeline-content">
                                      <h3 class="uk-text-uppercase">2014</h3>
                                      <p><strong>Fénix Trading Company</strong> firma un contrato de distribución para Paraguay con <strong>Huawei</strong>.</p>
                                  </div>
                              </div>
                              <div class="tw-timeline-block">
                                  <div class="tw-timeline-circle"></div>
                                  <div class="tw-timeline-content">
                                      <h3 class="uk-text-uppercase">2016</h3>
                                      <p><strong>Bonus</strong> expande su línea de productos incluyendo la distribución de la línea de electrodomésticos <strong>Samsung</strong>.</p>
                                      <p><strong>Fénix Emprendimientos Inmobiliarios</strong> firma un contrato con <strong>Hilton Worldwide</strong>, convirtiéndose así en la primera empresa paraguaya en desarrollar un proyecto con la pretigiosa cadena hotelera.</p>
                                      <p><strong>Fénix Emprendimientos Inmobiliarios</strong> lanza <strong>Arca</strong>, proyecto que desarrolla plataformas logísticas e industriales.</p>
                                  </div>
                              </div>
                              <div class="tw-timeline-block">
                                  <div class="tw-timeline-circle"></div>
                                  <div class="tw-timeline-content">
                                      <h3 class="uk-text-uppercase">2020</h3>
                                      <p><strong>Bonus</strong> expande su línea de productos y trae al Paraguay los electrodomésticos <strong>Continental</strong>.</p>
                                  </div>
                              </div>
                              <div class="tw-timeline-block">
                                  <div class="tw-timeline-circle"></div>
                                  <div class="tw-timeline-content">
                                      <h3 class="uk-text-uppercase">2021</h3>
                                      <p><strong>Bonus S.A.</strong> pasa a formar parte del <strong>Grupo Cartes</strong>.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>



              <div class="features-section ">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-6">
                           <div class="feature-box">
                               <img src="assets/images/target.svg" alt="">

                               <div class="feature-box-content">
                                   <h3>Misión</h3>
                                   <p>Somos una empresa orientada a la importación y distribución de productos de electrónica y telecomunicaciones, con presencia y desarrollo en la República del Paraguay. Comercializamos nuestros productos a través de las diversas tiendas distribuidas a lo largo del territorio nacional, ofreciendo a nuestros clientes un servicio eficiente y soporte diferenciado, con el objetivo final de impulsar constantemente el crecimiento de nuestro negocio, maximizando el retorno de los inversionistas y proyectando la sustentabilidad en el tiempo.</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-6">
                         <div class="feature-box">
                           <img src="assets/images/telescope.svg" alt="">
                           <div class="feature-box-content">
                             <h3>Visión</h3>
                             <p>Ser la empresa de mayor reconocimiento y prestigio del país, en la comercialización y distribución de productos y servicios electrónicos, para ayudar al bienestar de la población.</p>
                           </div>
                         </div>
                       </div>

                       <div class="col-lg-12">
                           <div class="feature-box">
                               <img src="assets/images/respect.svg" alt="">

                               <div class="feature-box-content">
                                   <h3>Valores</h3>
                                   <div class="tw-element tw-list">
                                       <ul class="uk-list" data-uk-scrollspy="target: > li; cls:uk-animation-slide-bottom-medium; delay: 200;">
                                           <li><i class="icon ion-ios-checkmark-outline"></i>Enfoque al Cliente – Existimos por el Cliente</li>
                                           <li><i class="icon ion-ios-checkmark-outline"></i>Espíritu Positivo – Todo puede ser más llevadero si se enfoca positivamente</li>
                                           <li><i class="icon ion-ios-checkmark-outline"></i>Asertividad – Decir las cosas como son, sin agredir ni someter</li>
                                           <li><i class="icon ion-ios-checkmark-outline"></i>Trabajo en equipo y compromiso – Contribuir con el equipo de trabajo – si uno gana, todos ganan</li>
                                           <li><i class="icon ion-ios-checkmark-outline"></i>Pro actividad, Innovación y Pasión – Curiosidad, buscar siempre anticiparse a los hechos y saber que siempre podemos mejorar. Lo único constante es el cambio, innovar es crecer</li>
                                           <li><i class="icon ion-ios-checkmark-outline"></i>Austeridad – Actuar en forma responsable cuidando los bienes de la empresa</li>
                                           <li><i class="icon ion-ios-checkmark-outline"></i>Responsabilidad Empresarial – Ser conscientes de las consecuencias de nuestros actos. Ser actores impulsores de la transparencia y la honestidad</li>
                                       </ul>
                                   </div>

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
