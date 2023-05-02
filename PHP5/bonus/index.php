<!DOCTYPE html>
<html id="htmlTag" lang="es" dir="ltr" class="no-js">

    <?php
        $page = "Bienvenido ";
        include 'includes/head.php';
    ?>

    <link rel="stylesheet" href="assets/css/css-index.css">

    <body class="theme-site-home">
        <div class="page-wrapper">
            <?php
              include 'includes/header.php';
            ?>

            <script type="text/javascript">
                var className = document.getElementById('htmlTag').className;
                document.getElementById('htmlTag').className = className.indexOf('no-js' > -1) ? className.replace('no-js', 'js') : className.length > 0 ? 'js ' + className : 'js';
            </script>
            <script>
                (function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    f.parentNode.insertBefore(j, f);
                })
                (window, document, 'script', 'dataLayer', 'GTM-TP4WJ2');
            </script>
            <!-- ISYSINDEXINGON -->

            <div id="content-wrap" id="inicio">
               <section class="multi-panel">
                   <div class="multi-panel__section" data-section="distribucion">
                        <div class="multi-panel__image lazy" data-bg="assets/images/banners-index/banner5.jpg"></div>
                        <button class="multi-panel__prompt">Ver</button>
                        <div class="multi-panel__content">
                            <div class="multi-panel__heading">
                                <span class="multi-panel__heading-preheading"></span>
                                <h2>DISTRIBUIMOS</h2>
		                        <span class="multi-panel__heading-subheading">
                                    Celulares, Electrodomésticos y Pantallas Profesionales
                                </span>
                            </div>
                            <ul>
                                <li>
                                    <a href="catalogo">
                                        <h4><i class="icon-right"></i> Catálogo</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="destacados">
                                        <h4><i class="icon-right"></i> Destacados</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="negocios" data-subsection="negocios">
                                        <h4><i class="icon-right"></i> Negocios</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="clientes" data-subsection="clientes">
                                        <h4><i class="icon-right"></i> Nuestros Clientes</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="multi-panel__section" data-section="confiabilidad">
                        <div class="multi-panel__image lazy" data-bg="assets/images/banners-index/banner1.jpg"></div>
                        <button class="multi-panel__prompt">Ver</button>
                        <div class="multi-panel__content">
                			<div class="multi-panel__heading">
                				<span class="multi-panel__heading-preheading">BONUS ES OPTIMISMO Y</span>
                				<h2>CONFIABILIDAD</h2>
                                <span class="multi-panel__heading-subheading"></span>
                			</div>
                            <ul>
                                <li>
                                    <a href="nosotros" data-subsection="nosotros">
                                        <h4><i class="icon-right"></i> ¿Quiénes somos?</h4>
                                        <p>Traemos la mejor innovación en tecnología al país.</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="recursos-humanos" data-subsection="por-que-elegirnos">
                                        <h4><i class="icon-right"></i> Recursos Humanos</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="por-que-elegirnos" data-subsection="por-que-elegirnos">
                                        <h4><i class="icon-right"></i> Razones para elegirnos</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="multi-panel__section" data-section="calidad">
                        <div class="multi-panel__image lazy" data-bg="assets/images/banners-index/banner3.jpg"></div>
                        <button class="multi-panel__prompt">Ver</button>
                        <div class="multi-panel__content">
                			<div class="multi-panel__heading">
                                <span class="multi-panel__heading-preheading">
                				</span>
                				<h2>CALIDAD</h2>
                				<span class="multi-panel__heading-subheading">
                                    Productos 100% nuevos, originales y homologados para Paraguay.
                				</span>
                			</div>
                            <ul>
                                <li>
                                    <a href="post-venta" data-subsection="post-venta">
                                        <h4><i class="icon-right"></i> Post Venta</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="homologacion">
                                        <h4><i class="icon-right"></i> Homologación y Garantía</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="multi-panel__section" data-section="novedades">
                        <div class="multi-panel__image lazy" data-bg="assets/images/banners-index/banner6.jpg"></div>
                        <button class="multi-panel__prompt">Ver</button>
                        <div class="multi-panel__content">
                			<div class="multi-panel__heading">
                                <span class="multi-panel__heading-preheading">
                				</span>
                				<h2>Novedad</h2>
                				<span class="multi-panel__heading-subheading">
                                    Informate de las novedades que tenemos para vos.
                				</span>
                			</div>
                            <ul>
                                <li style="display: none;">
                                    <a href="samsung-house">
                                        <h4><i class="icon-right"></i> Samsung Stores</h4>
                                    </a> 
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/bonuspy/">
                                        <h4><i class="icon-right"></i> Facebook </h4>
                                    </a> 
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/bonuspy/?hl=es">
                                        <h4><i class="icon-right"></i> Instagram </h4>
                                    </a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

            </div>
            <div class="footer-bottom footer-index">
              <div class="container-fluid">
                <p class="footer-copyright copyright-over">Ponete en contacto con nosotros y empecemos a trabajar juntos</p>
                <a href="contacto" class="btn btn-primary btn-small" role="button">Contactar</a>
              </div>
            </div>
        </div>
        <?php
          include 'includes/menu.php';
        ?>
        <script src="assets/js/jquery.min.js"></script>

        <script src="assets/js/uikit.min.js"></script>

        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script>

            var Prueba = Prueba || {};

        </script>

        <script src="assets/js/js-index.js"></script>
        <script src="assets/js/plugins.min.js"></script>


        <!-- Main JS File -->
        <script src="assets/js/main.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function(){
          $(window).scroll(function(){
         if ($(window).height() + $(window).scrollTop() == $(document).height()) {
                   $('.footer-bottom:not(.footer-index)').css('margin-bottom',$('.footer').height());
          } else {
               $('.footer-bottom').css('margin-bottom','0');
         }
          });

        });
        </script>

        <script src="assets/js/jquery.fullpage.js"></script>
        <script src="assets/js/theme.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.3/dist/lazyload.min.js"></script>
        <script type="text/javascript">
        var lazyLoadInstance = new LazyLoad();
        </script>

    </body>
</html>
