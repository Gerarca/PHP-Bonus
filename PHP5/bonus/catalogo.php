<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Catálogo ";
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
                $resultstores = mysql_query("SELECT * from catalogo_portada");
                while ($rowCliente = mysql_fetch_array($resultstores))
                { 
                    ?>
                      <div class="page-header page-header-bg" style="background-image: url('<?php echo $raiz_web.'/public/portada/'.$rowCliente["imagen"] ?>');">
                      </div>
                    <img src="" alt="Nosotros banner" class="img-fluid" loading="lazy"> ';
                    <?php
                }
            ?>

            <div class="container page-header-title">
                <h1>Catálogo</h1>
            </div>
              <hr style="margin: 15px 0 0;">
              <div class="container-fluid" style="padding-top: 15px;background: #2189ba;">
                  <div class="row justify-content-center">
                      <div class="col-12 col-md-4 text-center">
                        <a href="#celulares"><h3 style="border-right: 1px solid white;color:white;font-weight: normal;">Celulares y Tablets</h3></a>
                      </div>
                      <div class="col-12 col-md-4 text-center">
                        <a href="#pantallas"><h3 style="border-right: 1px solid white;color:white;font-weight: normal;">Pantallas Profesionales</h3></a>
                      </div>
                      <div class="col-12 col-md-4 text-center">
                        <a href="#electrodomesticos"><h3 style="color:white;font-weight: normal;">Electrodomésticos</h3></a>
                      </div>
                  </div>
              </div>
              <hr style="margin: 0  0 15px 0;">
              <div class="container pt-70" id="celulares">
                    <h2 class="subtitle">Celulares y Tablets</h2>
                    <div class="row row-sm">

                        <?php

                            $resultCatalogo = mysql_query("SELECT * FROM catalogo WHERE categoria = 'Celulares y Tablets' ");
                            while($rowCatalogo = mysql_fetch_array($resultCatalogo)){
                         ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="card">
                                      <img src="<?= $raiz ?>public/catalogo/<?= $rowCatalogo['imagen'] ?>" class="card-img-top" loading="lazy">
                                      <div class="card-body">
                                        <h3 class="card-title"><?= $rowCatalogo['nombre'] ?></h3>
                                      </div>
                                      <div class="card-footer">
                                        <div class="card_btns">
                                        <a href="<?= $raiz ?>public/catalogo/archivo/<?= $rowCatalogo['archivo'] ?>" target="_blank" class="btn btn-primary btn-small" role="button"><i class="icon-eye"></i> Visualizar</a>
                                        <a href="<?= $raiz ?>public/catalogo/archivo/<?= $rowCatalogo['archivo'] ?>" download class="btn btn-light btn-small" role="button"><i class="icon-down-1"></i> Descargar</a>
                                      </div>
                                      </div>
                                    </div>
                                </div>
                        <?php
                            }
                         ?>

                    </div>

                    <p id="pantallas">&nbsp;</p>
                    <hr>
                    <p>&nbsp;</p>
                    <h2 class="subtitle" >Pantallas Profesionales</h2>
                    <div class="row row-sm">
                        <div class="col-sm-12 col-md-6 col-lg-4">

                            <?php

                                $resultCatalogo = mysql_query("SELECT * FROM catalogo WHERE categoria = 'Pantallas Profesionales' ");
                                while($rowCatalogo = mysql_fetch_array($resultCatalogo)){
                             ?>
                                    <div class="card">
                                      <img src="<?= $raiz ?>public/catalogo/<?= $rowCatalogo['imagen'] ?>" class="card-img-top" loading="lazy">
                                      <div class="card-body">
                                        <h3 class="card-title"><?= $rowCatalogo['nombre'] ?></h3>
                                      </div>
                                      <div class="card-footer">
                                        <div class="card_btns">
                                        <a href="<?= $raiz ?>public/catalogo/archivo/<?= $rowCatalogo['archivo'] ?>" target="_blank" class="btn btn-primary btn-small" role="button"><i class="icon-eye"></i> Visualizar</a>
                                        <a href="<?= $raiz ?>public/catalogo/archivo/<?= $rowCatalogo['archivo'] ?>" download class="btn btn-light btn-small" role="button"><i class="icon-down-1"></i> Descargar</a>
                                      </div>
                                      </div>
                                    </div>
                            <?php
                                }
                             ?>
                        </div>
                    </div>

                          <p id="electrodomesticos">&nbsp;</p>
                          <hr>
                          <p>&nbsp;</p>
                    <h2 class="subtitle" >Electrodomésticos</h2>
                    <div class="row row-sm">

                        <?php

                            $resultCatalogo = mysql_query("SELECT * FROM catalogo WHERE categoria = 'Electrodomésticos' ");
                            while($rowCatalogo = mysql_fetch_array($resultCatalogo)){
                        ?>
                              <div class="col-sm-12 col-md-6 col-lg-4">
                              <div class="card">
                                <img src="<?= $raiz ?>public/catalogo/<?= $rowCatalogo['imagen'] ?>" class="card-img-top" loading="lazy">
                                <div class="card-body">
                                  <h3 class="card-title"><?= $rowCatalogo['nombre'] ?></h3>
                                </div>
                                <div class="card-footer">
                                  <div class="card_btns">
                                  <a href="<?= $raiz ?>public/catalogo/archivo/<?= $rowCatalogo['archivo'] ?>" target="_blank" class="btn btn-primary btn-small" role="button"><i class="icon-eye"></i> Visualizar</a>
                                  <a href="<?= $raiz ?>public/catalogo/archivo/<?= $rowCatalogo['archivo'] ?>" download class="btn btn-light btn-small" role="button"><i class="icon-down-1"></i> Descargar</a>
                                </div>
                                </div>
                              </div>
                              </div>
                        <?php
                            }
                         ?>

                        </div>

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
