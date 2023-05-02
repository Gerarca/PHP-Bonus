<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Productos destacados ";
      include 'includes/head.php';
    ?>
</head>
<body>
    <div class="page-wrapper">
      <?php
        include 'includes/header.php';
      ?>

      <main class="main">

            <div class="page-header page-header-bg" style="background-image: url('assets/images/header.jpg');background-position:center;">
            </div>
            <div class="container page-header-title">
                <h1>Productos Destacados</h1>
            </div>


            <p>&nbsp;</p>

            <div class="container">
                <div class="row row-sm">
    
                    <?php 
                        $resultDestacados = mysql_query("SELECT * FROM destacados ORDER BY id DESC");
                        while($rowDestacado = mysql_fetch_array($resultDestacados)){
                     ?>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <a href="<?= $rowDestacado['enlace'] ?>"><img src="<?= $raiz ?>public/destacados/<?= $rowDestacado['imagen'] ?>" class="card-img-top"></a>
                                    <div class="card-body">
                                        <a href="<?= $rowDestacado['enlace'] ?>" style="text-decoration: none;"><h3 class="card-title"><?= $rowDestacado["nombre"] ?></h3></a>
                                        <div class="card-text">
                                            <?= $rowDestacado['descripcion'] ?>
                                        </div>
                                        <a href="<?= $rowDestacado['enlace'] ?>" class="btn btn-link" role="button">Ver más <i class="icon-angle-right"></i></a>
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

</body>
</html>
