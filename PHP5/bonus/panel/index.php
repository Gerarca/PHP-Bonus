<?php

include_once('login/include/webzone.php');
include_once('../config.php');
if (isset($_POST['ingresar']))
{
	// Tomar la IP del usuario
      if ($_SERVER) {
        if ( $_SERVER[HTTP_X_FORWARDED_FOR] ) {
          $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif ( $_SERVER["HTTP_CLIENT_IP"] ) {
          $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
          $realip = $_SERVER["REMOTE_ADDR"];
        }
      } else {
        if ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
          $realip = getenv( 'HTTP_X_FORWARDED_FOR' );
        } elseif ( getenv( 'HTTP_CLIENT_IP' ) ) {
          $realip = getenv( 'HTTP_CLIENT_IP' );
        } else {
          $realip = getenv( 'REMOTE_ADDR' );
        }
      }
      //Navegador del usuario
      $navegador = $_SERVER['HTTP_USER_AGENT'];
      $now = date('Y-m-d H:i:s');
	$login = $_POST['usuario_panel'];
	$password = $_POST['contrasena_panel'];
	if($login=='' || $password=='')
	{
		echo '<script>window.location = "index.php";</script>';
	}
	else
	{
		if($login!='' && $password!='') $result = get_users(array('login'=>$login, 'password'=>md5($password)));
		if(count($result)>0) {
			if($result[0]['active']==1) {
				start_session(array('user_id'=>$result[0]['id'], 'login'=>$result[0]['login'], 'privilege'=>$result[0]['privilege']));
				$u1 = new MySqlTable();
				$sql = "UPDATE ".$GLOBALS['db_table']['users']." SET last_connect='".date('Y-m-d H:i:s')."' WHERE id='".$result[0]['id']."'";
				$u1->executeQuery($sql);
				$d['code'] = 1;
				$inserta_audita = "INSERT INTO sesiones (ip, navegador, fecha_hora, usuario, pase, tipo) VALUES ('$realip', '$navegador', '$now', '$login', '$password', 'INICIO PANEL')";
				mysql_query($inserta_audita);
			}
			else
			{
				$mensaje = 'Aviso: Su cuenta ha sido deshabilitada por un administrador.';
			}
		}
		else if( ($login==$GLOBALS['admin_username']) AND ($password==$GLOBALS['admin_password']) ) {
			start_session(array('user_id'=>'99999', 'login'=>$login, 'privilege'=>1));
			$u1 = new MySqlTable();
			$sql = "UPDATE ".$GLOBALS['db_table']['users']." SET last_connect='".date('Y-m-d H:i:s')."' WHERE id='".$result[0]['id']."'";
			$u1->executeQuery($sql);
			$d['code'] = 1;
		}
		else
		{
			$mensaje = 'Error: Sus credenciales de ingreso son incorrectos.';
			$inserta_audita = "INSERT INTO sesiones (ip, navegador, fecha_hora, usuario, pase, tipo) VALUES ('$realip', '$navegador', '$now', '$login', '$password', 'ERROR PANEL')";
			mysql_query($inserta_audita);
		}
	}
}
$connect = $_GET['connect'];
if(session_is_live())
{
	$session = get_session();
	$privilege=$session['privilege'];
	if ($privilege==NULL)
	{
		echo '<script>window.location = "../index.php";</script>';
	}
	else
	{
		echo '<script>window.location = "app/";</script>';
	}
}

?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="author" content="Porta Agencia Web - http://www.porta.com.py">
  <title>Panel de Administración - eCommerce Agencia Web Porta</title>
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="assets/favicons/manifest.json">
  <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="assets/favicons/favicon.ico">
  <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="assets/css/site.min.css">
  <link rel="stylesheet" href="assets/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="assets/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="assets/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="assets/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="assets/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="assets/global/vendor/jquery-mmenu/jquery-mmenu.css">
  <link rel="stylesheet" href="assets/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="assets/global/vendor/jquery-mmenu/jquery-mmenu.css">
  <link rel="stylesheet" href="assets/examples/css/pages/ingreso.css">
  <link rel="stylesheet" href="assets/skins/red.css">
  <link rel="stylesheet" href="assets/global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <script src="assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="animsition page-login-v3 layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <img class="brand-img" src="../logo.png" width="100%">
            <h4 class="brand-text font-size-12"><?php echo $mensaje; ?></h4>
          </div>
          <form name="ingresar" method="post" action="" enctype="multipart/form-data">
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input type="email" class="form-control" name="usuario_panel" required="" autofocus=""/>
              <label class="floating-label">Dirección de E-Mail</label>
            </div>
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input type="password" class="form-control" name="contrasena_panel" required=""/>
              <label class="floating-label">Contraseña</label>
            </div>
            <button type="submit" name="ingresar" class="btn btn-primary btn-block btn-lg mt-40">Ingresar</button>
          </form>
        </div>
      </div>
      <footer class="page-copyright page-copyright-inverse">
        <p>Diseñado y Desarrollado por Agencia Web Porta S.R.L.</p>
        <p>2014 - <?php echo date('Y'); ?></p>
        <div class="social">
          <a class="btn btn-icon btn-pure" href="http://www.porta.com.py">
            <img src="assets/images/porta.png" />
          </a>
        </div>
      </footer>
    </div>
  </div>


  <script src="assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="assets/global/vendor/jquery/jquery.js"></script>
  <script src="assets/global/vendor/tether/tether.js"></script>
  <script src="assets/global/vendor/bootstrap/bootstrap.js"></script>
  <script src="assets/global/vendor/animsition/animsition.js"></script>
  <script src="assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="assets/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
  <script src="assets/global/vendor/asscrollable/jquery-asScrollable.js"></script>
  <script src="assets/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js"></script>
  <script src="assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="assets/global/vendor/intro-js/intro.js"></script>
  <script src="assets/global/vendor/screenfull/screenfull.js"></script>
  <script src="assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="assets/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
  <script src="assets/global/js/State.js"></script>
  <script src="assets/global/js/Component.js"></script>
  <script src="assets/global/js/Plugin.js"></script>
  <script src="assets/global/js/Base.js"></script>
  <script src="assets/global/js/Config.js"></script>
  <script src="assets/js/Section/Menubar.js"></script>
  <script src="assets/js/Section/Sidebar.js"></script>
  <script src="assets/js/Section/PageAside.js"></script>
  <script src="assets/js/Section/GridMenu.js"></script>
  <script src="assets/global/js/config/colors.js"></script>
  <script src="assets/js/config/tour.js"></script>
  <script>
  Config.set('assets', 'assets/');
  </script>
  <script src="assets/js/Site.js"></script>
  <script src="assets/global/js/Plugin/asscrollable.js"></script>
  <script src="assets/global/js/Plugin/slidepanel.js"></script>
  <script src="assets/global/js/Plugin/switchery.js"></script>
  <script src="assets/global/js/Plugin/jquery-placeholder.js"></script>
  <script src="assets/global/js/Plugin/material.js"></script>
  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>
