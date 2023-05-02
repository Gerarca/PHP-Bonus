<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $page = "Recursos Humanos ";
  include 'includes/head.php';
  ?>

</head>
<body>
  <div class="page-wrapper">
    <?php
    include 'includes/header.php';
    ?>

    <main class="main">

      <img src="assets/images/Collage.jpg" alt="RRHH banner" class="img-fluid" loading="lazy">
      <div class="container page-header-title">
        <h1>Recursos Humanos</h1>
      </div>

      <div class="about-section" style="padding-top: 3rem;">
        <div class="container">
          <p>Somos protagonistas más que espectadores, somos pacientes, respetamos las opiniones de los demás. Nos basamos en hechos y no en suposiciones.
            Comunicamos asertivamente lo que pensamos y sentimos. Recibimos críticas constructivas por que estamos en constante crecimiento.
            Tenemos actitud y voluntad para hacer que las cosas sucedan. Somos atrevidos, experimentamos y asumimos riesgos.</p>
            <p class="lead">¡Estamos Programados para el éxito!</p>
          </div>
        </div>

        <div class=" about-section rrhh">
          <div class="container">
            <h2 class="subtitle mb-60">Nuestro Equipo</h2>

            <!-- <?php

            $resultCategorias = mysql_query("SELECT * FROM categorias_recursos ORDER BY nombre ASC");
            while($rowCategoria = mysql_fetch_array($resultCategorias)){
              ?>
              <h3 class="subtitle text-left"><?= $rowCategoria["nombre"] ?></h3>
              <?php

              $resultEquipo = mysql_query("SELECT * FROM equipo WHERE id_categoria = {$rowCategoria['id']} ORDER BY id ASC");

              $cantidad = mysql_num_rows($resultEquipo);
              $bloques = ceil($cantidad / 10);
              $arrayEquipos = array();

              for ($i=0; $i < $bloques; $i++) {

                $arrayEquipos[$i] = array();
              }

              $auxFlag = 0;
              while($rowEquipo = mysql_fetch_array($resultEquipo)){
                array_push($arrayEquipos[$auxFlag], $rowEquipo);
                $auxFlag++;
                if($auxFlag >= $bloques){
                  $auxFlag = 0;
                }
              }

              foreach ($arrayEquipos as $postEquipo => $equipo) {

                ?>

                <div class="featured-products owl-carousel owl-theme owl-dots-top" >

                  <?php
                  foreach ($equipo as $key => $rowEquipo) {
                    ?>
                    <div class="product">
                      <figure class="product-image-container">
                        <img src="<?= $raiz ?>public/equipo/<?= $rowEquipo['foto'] ?>" loading="lazy">
                      </figure>
                      <div class="product-details action-inner mt-10">
                        <h5 class="subtitle">
                          <?= $rowEquipo["nombre"] ?> - <?= $rowEquipo["cargo"] ?>
                        </h5>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                </div>
                <?php
              }

              ?>


              <?php

            }

            ?> -->



            <div class="row">
              <?php
                $resultEquipo = mysql_query("SELECT * FROM equipo ORDER BY FIELD(id,45,23,38,57,53,9,59,32,52,17,41,56,20,39,18,8,50,40,12,7,6,51,54,13,61,60,46,47,49, 55,42,29,14,44,5,58,48,43,24,22) DESC");

                while($rowEquipo = mysql_fetch_array($resultEquipo)){
                  ?>

                  <div class="product col-lg-3 col-md-4 col-sm-6" data-id="<?= $rowEquipo["id"] ?>">
                    <figure class="product-image-container">
                      <img src="<?= $raiz ?>public/equipo/<?= $rowEquipo['foto'] ?>" loading="lazy">
                    </figure>
                    <div class="product-details action-inner mt-10">
                      <h5 class="subtitle">
                        <?= $rowEquipo["nombre"] ?> - <?= $rowEquipo["cargo"] ?>
                      </h5>
                    </div>
                  </div>

                  <?php
                }
              ?>
            </div>

          </div><!-- End .container-fluid -->
        </div><!-- End .featured-section -->
        <hr style="margin: 3rem auto 3.5rem;">
        <div class="about-section mb-30">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 siguenos text-center">
                <h2 class="subtitle mb-60">Trabajá con Nosotros</h2>
                <ul class="list-inline">
                  <li class="list-inline-item list-inline-title pr-40"><h3 class="subtitle" style="text-align: left;">Mandanos tu CV</h3></li>
                  <li class="list-inline-item pr-20">
                    <a href="mailto:talentos@bonus.com.py">
                      <i class="icon-mail"></i> talentos@bonus.com.py
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-8"></div><!-- margin -->
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

  </body>
  </html>
