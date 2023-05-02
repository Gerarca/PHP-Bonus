<?php
	include('cabecera.php');
	if (empty($_GET) || isset($_GET['listar']))
	{
		$comando = 1;
	}
	if (isset($_GET['crear']))
	{
		$comando = 2;
	}
	if (isset($_GET['editar']))
	{
		$comando = 3;
	}

	if (isset($_POST['editar_store']))
	{
		if (isset($_POST['id']))
		{
			$id_store = "{$_POST['id']}";
			$imagen1_actual = "{$_POST['imagen1_actual']}";
			$destinoLogo = NULL;
			$destino1 = NULL;

	        // datos de la imagen 1
	        $tamano = $_FILES["archivo1"]['size'];
	        $tipo = $_FILES["archivo1"]['type'];
	        $archivo1 = $_FILES["archivo1"]['name']; 
	        if ($archivo1 != "") { 
		        $archivo1=sanear_string(str_replace(' ', '_', $archivo1));
	            // guardar el archivo1 a la carpeta subidas
	            $prefijo = substr(md5(uniqid(rand())),0,6);
	            $destino1 =  "../../public/portada/".$prefijo."-".$archivo1;
				var_dump( copy($_FILES['archivo1']['tmp_name'],$destino1) );
	            if (copy($_FILES['archivo1']['tmp_name'],$destino1)) { 
	                $status = "Archivo1 subido: <b>".$archivo1."</b>";
	                $destino1 = $prefijo."-".$archivo1;
	            }else {
					$respuesta_form = 4;
				}
	        }

		    if ($destino1 == NULL) { $destino1 = $imagen1_actual; }
			
			$fechaActual = date('Y-m-d H:i:s');
			mysql_query("UPDATE clientes_portada SET imagen = '$destino1', ultima_actualizacion = '$fechaActual' WHERE id = $id_store");
			$respuesta_form = 1;

		}
		else
		{
			echo '<script>window.location = "'.$raiz.'app/clientes_portada";</script>';
		}
	}

?>

<script src="../assets/ckeditor/ckeditor.js"></script>

  <div class="page">
    <div class="page-header">
      <div class="text-center blue-grey-800 ">
		<div class="avatar avatar-100">
			<a href="<?php echo $raiz; ?>app/"><img src="../../logo.png"></a>
		</div>
    </div>

	<?php
	//LISTAR
	if ($comando==1)
	{
?>

    <div class="page-content container-fluid">
      <div class="row">
	  	<div class="col-lg-12">
          <div class="row h-full">
            <div class="col-lg-12">
				<div class="panel">
					<div class="panel-heading">
			          <h3 class="panel-title">Portada
			            <small>Clientes</small>
			          </h3>
			          <?php
				          if ($respuesta_form==1)
				          {
					          echo '<div class="alert alert-alt alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Excelente! <a class="alert-link" href="javascript:void(0)">ya hemos modificado los datos correctamente</a>.</div>';
				          }
				          if ($respuesta_form==2)
				          {
					          echo '<div class="alert alert-alt alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Listo! <a class="alert-link" href="javascript:void(0)">hemos borrado el dato indicado</a>.</div>';
				          }
				          if ($respuesta_form==3)
				          {
					          echo '<div class="alert alert-alt alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Wohoo! <a class="alert-link" href="javascript:void(0)">hemos creado el dato indicado</a>.</div>';
				          }
				          if ($respuesta_form==4)
				          {
					          echo '<div class="alert alert-alt alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Ooops! <a class="alert-link" href="javascript:void(0)">hemos tenido un problema para procesar el dato indicado</a>.</div>';
				          }
				      ?>
			        </div>
					<div class="panel-body">
						<table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
						<thead>
							<tr>
							<th>#</th>
							<th>Imagen</th>
							<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$resultstores = mysql_query("SELECT * from clientes_portada");
								while ($rowCliente = mysql_fetch_array($resultstores))
								{

									$c++;
									echo '<tr><td>'.$c.'</td>';
									echo '<td><img src="'.$raiz_web.'/public/portada/'.$rowCliente["imagen"].'" width="50%"/></td>';

									if($rowCliente["ultima_actualizacion"] != null){
										echo '<td>'.date("d-m-Y H:i:s", strtotime($rowCliente["ultima_actualizacion"])).'</td>';
									} else {
										echo '<td>NUNCA</td>';
									}

									echo '<td class="text-nowrap">
										<a href="'.$raiz.'app/clientes_portada?editar&id='.$rowCliente["id"].'" class="btn btn-pure btn-warning" data-toggle="tooltip" data-original-title="Editar"><i class="icon wb-pencil" aria-hidden="true"></i></a>';

								echo "</td></tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php
	}
	//CREAR
	if ($comando==2)
	{
?>

    <div class="page-content container-fluid">
      <div class="row">
	  	<div class="col-lg-12">
          <div class="row h-full">
            <div class="col-lg-12">
				<div class="panel">
				   <div class="panel-heading">
				      <h3 class="panel-title">Crear
			            <small>Clientes</small>
			          </h3>
				   </div>
				   <form action="<?php echo $raiz; ?>app/clientes_portada" method="POST" enctype="multipart/form-data">
				      <div class="panel-body">

				        <div class="form-group">
	                        <label class="col-md-12 control-label" for="text-input">Imagen </label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo1" type="file" id="file-input" class="form-control" required />
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>

				      </div>
				      <div class="panel-footer">
				         <button type="submit" name="crear_store" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Crear</button>
				         <a href="<?php echo $raiz;?>app/" class="btn btn-sm btn-primary"><i class="fa fa-ban"></i> Cerrar</a>
				      </div>
				   </form>
				</div>
			</div>
		</div>
	</div>
<?php
	}
	//EDITAR
	if ($comando==3)
	{
		if (isset($_GET['id']))
		{
			$id_store = "{$_GET['id']}";
			if ($id_store==NULL)
			{
				echo '<script>window.location = "'.$raiz.'app/clientes_portada";</script>';
			}
			else
			{
				$result = mysql_query("SELECT * FROM clientes_portada WHERE id='$id_store'");
				while ($row = mysql_fetch_array($result))
				{
					$imagen1 = $row["imagen"];
				}
			}
		}
		else
		{
			echo '<script>window.location = "'.$raiz.'app/clientes_portada";</script>';
		}
?>

    <div class="page-content container-fluid">
      <div class="row">
	  	<div class="col-lg-12">
          <div class="row h-full">
            <div class="col-lg-12">
				<div class="panel">
				   <div class="panel-heading">
				      <h3 class="panel-title">Editar
			            <small>Clientes</small>
			          </h3>
				   </div>
				   <form action="<?php echo $raiz; ?>app/clientes_portada" method="POST" enctype="multipart/form-data">
				      <div class="panel-body">

				         <div class="form-group">
	                        <label class="col-md-3 control-label" for="text-input">Imagen actual </label>
	                        <div class="col-md-9">
	                        <div class="input-group col-sm-6">
	                        	<?php 

			                    	if($imagen1 != ""){
			                     ?>
			                        	<img src="<?php echo $raiz_web; ?>public/portada/<?php echo $imagen1; ?>" width="60%"/>
	                        	<input type="hidden" name="imagen1_actual" value="<?php echo $imagen1; ?>" />
	                        	<?php 
	                        		} else {
	                        	 ?>
	                        	 		<br>
	                        	 		<label class="col-md-3 control-label" for="text-input">Sin foto </label>
	                        	<?php 
	                        		}
	                        	 ?>
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>

						<div class="form-group">
	                        <label class="col-md-12 control-label" for="text-input">Nueva Imagen </label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo1" type="file" id="file-input" class="form-control" required />
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>

				      </div>
				      <div class="panel-footer">
                       	<input type="hidden" name="id" value="<?php echo $id_store; ?>" />
				         <button type="submit" name="editar_store" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Editar</button>
				         <a href="<?php echo $raiz;?>app/" class="btn btn-sm btn-primary"><i class="fa fa-ban"></i> Cerrar</a>
				      </div>
				   </form>
				</div>
			</div>
		</div>
	</div>

<?php
	}
?>


			</div>
		</div>
	</div>
</div>
</div>

  <?php
	  include('pie.php');
  ?>

  <script>CKEDITOR.replace( 'horarios' );</script>

  <link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo $raiz; ?>assets/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
  <script src="<?php echo $raiz; ?>assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/jquery/jquery.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/tether/tether.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/animsition/animsition.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/asscrollable/jquery-asScrollable.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/intro-js/intro.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-select-bs4/dataTables.select.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-buttons/buttons.html5.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-buttons/buttons.flash.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-buttons/buttons.print.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/vendor/bootbox/bootbox.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/State.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/Component.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/Plugin.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/Base.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/Config.js"></script>
  <script src="<?php echo $raiz; ?>assets/js/Section/Menubar.js"></script>
  <script src="<?php echo $raiz; ?>assets/js/Section/Sidebar.js"></script>
  <script src="<?php echo $raiz; ?>assets/js/Section/PageAside.js"></script>
  <script src="<?php echo $raiz; ?>assets/js/Section/GridMenu.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/config/colors.js"></script>
  <script src="<?php echo $raiz; ?>assets/js/config/tour.js"></script>
  <script>
  Config.set('assets', '../../assets');
  </script>
  <script src="<?php echo $raiz; ?>assets/js/Site.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/Plugin/asscrollable.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/Plugin/slidepanel.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/Plugin/switchery.js"></script>
  <script src="<?php echo $raiz; ?>assets/global/js/Plugin/datatables.js"></script>
  <script src="<?php echo $raiz; ?>assets/examples/js/tables/datatable.js"></script>
</body>
</html>
