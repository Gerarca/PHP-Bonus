<?php
include('../../config.php');
include_once('../login/include/webzone.php');
$raiz_web = "https://bonus.com.py/";
$raiz = "https://bonus.com.py/panel/";
$connect = $_GET['connect'];
if(session_is_live())
{
	$session = get_session();
	$login=$session['login'];
	$sql="SELECT * FROM usuarios_panel WHERE login='$login'";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result))
	{
		$contrasena_cabecera = ''.$row["password"].'';
		$contrasena_cabecera_chat = 'ChatELECTROBAN2017';
		$contrasena_cabecera_chat = md5($contrasena_cabecera_chat);
		$first_name = ''.$row["first_name"].'';
		$last_name = ''.$row["last_name"].'';
		$empresa_user = ''.$row["empresa"].'';
		$privilege = ''.$row["privilege"].'';
		$id_usuario = ''.$row["id"].'';
	}
	$nombre_persona = ''.$first_name.' '.$last_name.'';
	if ($privilege==NULL)
	{
		echo '<script>window.location = "'.$raiz.'";</script>';
	}
	if ($privilege==1)
	{
		$rango="Administrador";
	}
	if ($privilege==2)
	{
		$rango="Usuario";
	}
	if ($privilege==3)
	{
		$rango="Equipo de Regalos";
	}
	if ($privilege==4)
	{
		$rango="Equipo de Chat Online";
	}
	
	function dateDifference($date_1 , $date_2 , $differenceFormat = '%H' )
	{
		$datetime1 = date_create($date_1);
		$datetime2 = date_create($date_2);

		$interval = date_diff($datetime1, $datetime2);

		return $interval->format($differenceFormat);

	}
	function random_color_part() {
		return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
	}

	function random_color() {
		return random_color_part() . random_color_part() . random_color_part();
	}
}
else
{
	echo '<script>window.location = "'.$raiz.'";</script>';
}
//enviar reportes
if (isset($_POST['user_id_report'])) {
	$GET=$_POST['GET'];
	$POST=$_POST['POST'];
	$HTTP_HOST=$_POST['HTTP_HOST'];
	$REQUEST_URI=$_POST['REQUEST_URI'];
	$user_id_report=$_POST['user_id_report'];


	include('/var/www/html/mailer/bug-reporter.php');
}
//enviar reportes
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="author" content="Porta Agencia Web - http://www.porta.com.py">
	<title>Panel de Administración - eCommerce Agencia Web Porta</title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $raiz; ?>assets/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $raiz; ?>assets/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $raiz; ?>assets/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $raiz; ?>assets/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo $raiz; ?>assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo $raiz; ?>assets/favicons/favicon.ico">
	<meta name="msapplication-config" content="<?php echo $raiz; ?>assets/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/css/bootstrap-extend.min.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/css/site.min.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/animsition/animsition.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/asscrollable/asScrollable.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/switchery/switchery.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/intro-js/introjs.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/slidepanel/slidePanel.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/jquery-mmenu/jquery-mmenu.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/flag-icon-css/flag-icon.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/jquery-mmenu/jquery-mmenu.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/examples/css/pages/ingreso.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/fonts/web-icons/web-icons.min.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/examples/css/uikit/badges.css">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
	<!-- <link rel="stylesheet" href="<?php echo $raiz; ?>assets/skins/orange.css"> -->
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/skins/red.css">
	<link rel="stylesheet" href="<?php echo $raiz; ?>assets/css/specific.css">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


	<!--[if lt IE 9]>
	<script src="<?php echo $raiz; ?>assets/global/vendor/html5shiv/html5shiv.min.js"></script>
	<![endif]-->
	<!--[if lt IE 10]>
	<script src="<?php echo $raiz; ?>assets/global/vendor/media-match/media.match.min.js"></script>
	<script src="<?php echo $raiz; ?>assets/global/vendor/respond/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo $raiz; ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
	<script>
	Breakpoints();
	</script>
	<?php if ($the_maps==true): ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRLWG238BCytDL71xqhCfj-m67Ny7ncaU&libraries=places" defer></script>
	<?php endif; ?>
</head>
<body class="animsition site-navbar-small light">
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<nav class="site-navbar navbar navbar-default navbar-mega visible-xs" role="navigation">
		<div class="navbar-header visible-xs">
			<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
			data-toggle="menubar">
			<span class="sr-only">Toggle navigation</span>
			<span class="hamburger-bar"></span>
		</button>
	</div>
</nav>
<div class="navbar-container container-fluid visible-xs">
	<ul class="nav navbar-toolbar">
		<li class="nav-item hidden-float" id="toggleMenubar">
			<a class="nav-link" data-toggle="menubar" href="#" role="button">
				<i class="icon hamburger hamburger-arrow-left">
					<span class="sr-only">Toggle menubar</span>
					<span class="hamburger-bar"></span>
				</i>
			</a>
		</li>
	</ul>
</div>
<div class="site-menubar">
	<ul class="site-menu">
		<li class="site-menu-item has-sub">
			<a href="<?php echo $raiz; ?>app/">
				<i class="site-menu-icon wb-home" aria-hidden="true"></i>
				<span class="site-menu-title">Inicio</span>
			</a>
		</li>


		<?php if ($privilege==3) { ?>

			<li class="site-menu-item has-sub">
				<a href="#">
					<i class="site-menu-icon fa fa-gift" aria-hidden="true"></i>
					<span class="site-menu-title">Listas de Regalos</span>
					<span class="site-menu-arrow"></span>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item">
						<a class="animsition-link" href="<?php echo $raiz; ?>app/regalos?crear">
							<span class="site-menu-title">Crear Lista de Regalos</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="<?php echo $raiz; ?>app/regalos?listar">
							<span class="site-menu-title">Ver Listas de Regalos</span>
						</a>
					</li>
				</ul>
			</li>

		<?php } if ($privilege==4) { ?>

			<!-- <li class="site-menu-item has-sub">
			<a href="https://app.chatra.io/" target="_blank">
			<i class="site-menu-icon fa fa-comments" aria-hidden="true"></i>
			<span class="site-menu-title">Chat</span>
		</a>
	</li> -->

<?php } if ($privilege==1 || $privilege==2) { ?>

	<!-- <li class="site-menu-item has-sub">
	<a href="https://app.chatra.io/" target="_blank">
	<i class="site-menu-icon fa fa-comments" aria-hidden="true"></i>
	<span class="site-menu-title">Chat</span>
</a>
</li> -->

<?php if ($privilege==1): ?>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-users" aria-hidden="true"></i>
		<span class="site-menu-title">Usuarios del Panel</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/usuarios?crear">
				<span class="site-menu-title">Crear Usuario</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/usuarios?listar">
				<span class="site-menu-title">Ver Usuarios</span>
			</a>
		</li>
	</ul>
</li>
<?php endif; ?>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-list-ul" aria-hidden="true"></i>
		<span class="site-menu-title">Portadas</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/clientes_portada?editar">
				<span class="site-menu-title">Quienes Somos</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/recursos_humanos_portada?editar">
				<span class="site-menu-title">Recursos humanos</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/clientes_portada?editar">
				<span class="site-menu-title">Clientes</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/razones_portada?editar">
				<span class="site-menu-title">Razones para elegirnos</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/post_venta_portada?editar">
				<span class="site-menu-title">Post venta</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/negocios_portada?editar">
				<span class="site-menu-title">Negocios</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/homologacion_portada?editar">
				<span class="site-menu-title">Homologacion y garantia</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/samsung_stores_portada?editar">
				<span class="site-menu-title">Samsung Stores</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/contacto_portada?editar">
				<span class="site-menu-title">Contacto</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/catalogo_portada?editar">
				<span class="site-menu-title">Catalogo</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/destacado_portada?editar">
				<span class="site-menu-title">Destacado</span>
			</a>
		</li>
	</ul>
</li>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-users" aria-hidden="true"></i>
		<span class="site-menu-title">Recursos Humanos</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/categorias_recursos">
				<span class="site-menu-title">Categorías</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a href="#">
				<span class="site-menu-title">Equipo</span>
				<span class="site-menu-arrow"></span>
			</a>
			<ul class="site-menu-sub">
				<li class="site-menu-item">
					<a class="animsition-link" href="<?php echo $raiz; ?>app/equipo?crear">
						<span class="site-menu-title">Crear</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a class="animsition-link" href="<?php echo $raiz; ?>app/equipo?listar">
						<span class="site-menu-title">Ver Equipo</span>
					</a>
				</li>
			</ul>
		</li>
	</ul>
</li>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-list-ul" aria-hidden="true"></i>
		<span class="site-menu-title">Clientes</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/clientes?crear">
				<span class="site-menu-title">Crear Cliente</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/clientes?listar">
				<span class="site-menu-title">Ver Clientes</span>
			</a>
		</li>
	</ul>
</li>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-list-ul" aria-hidden="true"></i>
		<span class="site-menu-title">Negocios</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="#">
				<span class="site-menu-title">Integradores</span>
				<span class="site-menu-arrow"></span>
			</a>
			<ul class="site-menu-sub">
				<li class="site-menu-item">
					<a class="animsition-link" href="<?php echo $raiz; ?>app/integradores?crear">
						<span class="site-menu-title">Crear</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a class="animsition-link" href="<?php echo $raiz; ?>app/integradores?listar">
						<span class="site-menu-title">Ver Integradores</span>
					</a>
				</li>
			</ul>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="#">
				<span class="site-menu-title">Blaupunkt</span>
				<span class="site-menu-arrow"></span>
			</a>
			<ul class="site-menu-sub">
				<li class="site-menu-item">
					<a class="animsition-link" href="<?php echo $raiz; ?>app/blaupunkt?crear">
						<span class="site-menu-title">Crear</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a class="animsition-link" href="<?php echo $raiz; ?>app/blaupunkt?listar">
						<span class="site-menu-title">Ver</span>
					</a>
				</li>
			</ul>
		</li>
	</ul>
</li>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-calendar" aria-hidden="true"></i>
		<span class="site-menu-title">Calendario de Eventos</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/calendario_eventos?crear">
				<span class="site-menu-title">Crear Evento</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/calendario_eventos?listar">
				<span class="site-menu-title">Ver Eventos</span>
			</a>
		</li>
	</ul>
</li>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-list" aria-hidden="true"></i>
		<span class="site-menu-title">Destacados</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/destacados?crear">
				<span class="site-menu-title">Crear</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/destacados?listar">
				<span class="site-menu-title">Ver Destacados</span>
			</a>
		</li>
	</ul>
</li>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-download" aria-hidden="true"></i>
		<span class="site-menu-title">Catálogo</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/catalogo?crear">
				<span class="site-menu-title">Crear</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/catalogo?listar">
				<span class="site-menu-title">Ver Catálogo</span>
			</a>
		</li>
	</ul>
</li>
<li class="site-menu-item has-sub">
	<a href="#">
		<i class="site-menu-icon fa fa-industry" aria-hidden="true"></i>
		<span class="site-menu-title">Samsung Stores</span>
		<span class="site-menu-arrow"></span>
	</a>
	<ul class="site-menu-sub">
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/stores?crear">
				<span class="site-menu-title">Crear Store</span>
			</a>
		</li>
		<li class="site-menu-item">
			<a class="animsition-link" href="<?php echo $raiz; ?>app/stores?listar">
				<span class="site-menu-title">Ver Stores</span>
			</a>
		</li>
	</ul>
</li>

<?php } ?>

<li class="site-menu-item has-sub">
	<a href="<?php echo $raiz; ?>app/micuenta">
		<i class="site-menu-icon fa fa-user-circle-o" aria-hidden="true"></i>
		<span class="site-menu-title">Mi Cuenta</span>
	</a>
</li>
<li class="site-menu-item has-sub">
	<a href="<?php echo $raiz; ?>app/salir">
		<i class="site-menu-icon fa fa-sign-out" aria-hidden="true"></i>
		<span class="site-menu-title">Salir</span>
	</a>
</li>
</ul>
</div>

<form class="" action="" method="post" id="form-bug-report">
	<textarea style="display:none;" name="GET"><?php print_r($_GET); ?></textarea>
	<textarea style="display:none;" name="POST"><?php print_r($_POST); ?></textarea>
	<input type="hidden" name="HTTP_HOST" value="<?php echo $_SERVER[HTTP_HOST] ?>">
	<input type="hidden" name="REQUEST_URI" value="<?php echo $_SERVER[REQUEST_URI] ?>">
	<input type="hidden" name="user_id_report" value="<?php echo $id_usuario ?>">
</form>

<?php if (isset($_POST['user_id_report']) && $error==false): ?>
	<script type="text/javascript">
	alert("Se ha reportado el error con exito, estamos trabajando en ello.");
	</script>
<?php endif; ?>
