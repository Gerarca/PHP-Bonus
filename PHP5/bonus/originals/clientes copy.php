<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Clientes ";
      include 'includes/head.php';
    ?>
</head>
<body id="clientes">
    <div class="page-wrapper">
      <?php
        include 'includes/header.php';
      ?>

      <main class="main">
        <div class="page-header page-header-bg" style="background-image: url('assets/images/Slider2.jpg');">
        </div>
        <div class="container page-header-title">
            <h1>Nuestros Clientes</h1>
        </div>

        <div id="grid_clientes" class="row row-sm">

            <?php

                $resultClientes = mysql_query("SELECT * FROM clientes ORDER BY id DESC");
                while($rowCliente = mysql_fetch_array($resultClientes)){
             ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="<?= $rowCliente['enlace'] ?>" class="product-image" target="_blank">
                                    <img src="<?= $raiz ?>public/clientes/<?= $rowCliente['logo'] ?>" loading="lazy">
                                </a>
                            </figure>
                        </div><!-- End .product -->
                    </div><!-- End .col-lg-3 -->
            <?php

                }
            ?>

        </div><!-- End .row -->

        <!-- <div class="mb-8"></div> -->
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
