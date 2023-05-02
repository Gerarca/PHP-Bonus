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
	if (isset($_GET['eliminar']))
	{
		//ELIMINAR
		if (isset($_GET['id']))
		{
			$id_store = "{$_GET['id']}";
			if ($id_store==NULL)
			{
				echo '<script>window.location = "'.$raiz.'app/stores";</script>';
			}
			else
			{
				$Sql100="SELECT * FROM stores WHERE id = $id_store";
			    $result100=mysql_query($Sql100,$link);
			    while ($row100=mysql_fetch_array($result100))
			    {
			    	if($row100["logo"] != ""){
			    		unlink('../../public/stores/'.$row100["logo"]);
			    	}

			    	if($row100["imagen1"] != ""){
			    		unlink('../../public/stores/'.$row100["imagen1"]);
			    	}

			    	if($row100["imagen2"] != ""){
			    		unlink('../../public/stores/'.$row100["imagen2"]);
			    	}

			    	if($row100["imagen3"] != ""){
			    		unlink('../../public/stores/'.$row100["imagen3"]);
			    	}

			    	if($row100["imagen4"] != ""){
			    		unlink('../../public/stores/'.$row100["imagen4"]);
			    	}
			    }

				mysql_query("DELETE FROM stores WHERE id = $id_store");
				$respuesta_form = 2;
				$comando = 1;
			}
		}
		else
		{
			echo '<script>window.location = "'.$raiz.'app/stores";</script>';
		}
	}
	if (isset($_POST['crear_store']))
	{
		$nombre = $_POST['nombre'];
		$team = $_POST['team'];
		$horarios = $_POST['horarios'];
		$destinoLogo = NULL;
		$destino1 = NULL;
		$destino2 = NULL;
		$destino3 = NULL;
		$destino4 = NULL;

        // datos del Logo
        $tamano = $_FILES["archivoLogo"]['size'];
        $tipo = $_FILES["archivoLogo"]['type'];
        $archivoLogo = $_FILES["archivoLogo"]['name'];
        if ($archivoLogo != "") {
	        $archivoLogo=sanear_string(str_replace(' ', '_', $archivoLogo));
            // guardar el archivoLogo a la carpeta subidas
            $prefijo = substr(md5(uniqid(rand())),0,6);
            $destinoLogo =  "../../public/stores/".$prefijo."-".$archivoLogo;
            if (copy($_FILES['archivoLogo']['tmp_name'],$destinoLogo)) {
                $status = "ArchivoLogo subido: <b>".$archivoLogo."</b>";
                $destinoLogo = $prefijo."-".$archivoLogo;
            }
        }

        // datos de la imagen 1
        $tamano = $_FILES["archivo1"]['size'];
        $tipo = $_FILES["archivo1"]['type'];
        $archivo1 = $_FILES["archivo1"]['name'];
        if ($archivo1 != "") {
	        $archivo1=sanear_string(str_replace(' ', '_', $archivo1));
            // guardar el archivo1 a la carpeta subidas
            $prefijo = substr(md5(uniqid(rand())),0,6);
            $destino1 =  "../../public/stores/".$prefijo."-".$archivo1;
            if (copy($_FILES['archivo1']['tmp_name'],$destino1)) {
                $status = "Archivo1 subido: <b>".$archivo1."</b>";
                $destino1 = $prefijo."-".$archivo1;
            }
        }

        // datos de la imagen 2
        $tamano = $_FILES["archivo2"]['size'];
        $tipo = $_FILES["archivo2"]['type'];
        $archivo2 = $_FILES["archivo2"]['name'];
        if ($archivo2 != "") {
	        $archivo2=sanear_string(str_replace(' ', '_', $archivo2));
            // guardar el archivo2 a la carpeta subidas
            $prefijo = substr(md5(uniqid(rand())),0,6);
            $destino2 =  "../../public/stores/".$prefijo."-".$archivo2;
            if (copy($_FILES['archivo2']['tmp_name'],$destino2)) {
                $status = "Archivo2 subido: <b>".$archivo2."</b>";
                $destino2 = $prefijo."-".$archivo2;
            }
        }

        // datos de la imagen 3
        $tamano = $_FILES["archivo3"]['size'];
        $tipo = $_FILES["archivo3"]['type'];
        $archivo3 = $_FILES["archivo3"]['name'];
        if ($archivo3 != "") {
	        $archivo3=sanear_string(str_replace(' ', '_', $archivo3));
            // guardar el archivo3 a la carpeta subidas
            $prefijo = substr(md5(uniqid(rand())),0,6);
            $destino3 =  "../../public/stores/".$prefijo."-".$archivo3;
            if (copy($_FILES['archivo3']['tmp_name'],$destino3)) {
                $status = "Archivo3 subido: <b>".$archivo3."</b>";
                $destino3 = $prefijo."-".$archivo3;
            }
        }

        // datos de la imagen 4
        $tamano = $_FILES["archivo4"]['size'];
        $tipo = $_FILES["archivo4"]['type'];
        $archivo4 = $_FILES["archivo4"]['name'];
        if ($archivo4 != "") {
	        $archivo4=sanear_string(str_replace(' ', '_', $archivo4));
            // guardar el archivo4 a la carpeta subidas
            $prefijo = substr(md5(uniqid(rand())),0,6);
            $destino4 =  "../../public/stores/".$prefijo."-".$archivo4;
            if (copy($_FILES['archivo4']['tmp_name'],$destino4)) {
                $status = "Archivo4 subido: <b>".$archivo4."</b>";
                $destino4 = $prefijo."-".$archivo4;
            }
        }

  		mysql_query("INSERT INTO stores (nombre, logo, team, horarios, imagen1, imagen2, imagen3, imagen4, usuario) VALUES ('$nombre', '$destinoLogo', '$team', '$horarios', '$destino1', '$destino2', '$destino3', '$destino4', '$id_usuario')");
		$respuesta_form = 3;
	}

	if (isset($_POST['editar_store']))
	{
		if (isset($_POST['id']))
		{
			$id_store = "{$_POST['id']}";
			$logo_actual = "{$_POST['logo_actual']}";
			$imagen1_actual = "{$_POST['imagen1_actual']}";
			$imagen2_actual = "{$_POST['imagen2_actual']}";
			$imagen3_actual = "{$_POST['imagen3_actual']}";
			$imagen4_actual = "{$_POST['imagen4_actual']}";
			$nombre = $_POST['nombre'];
			$team = $_POST['team'];
			$horarios = $_POST['horarios'];
			$destinoLogo = NULL;
			$destino1 = NULL;
			$destino2 = NULL;
			$destino3 = NULL;
			$destino4 = NULL;


	        // datos del Logo
	        $tamano = $_FILES["archivoLogo"]['size'];
	        $tipo = $_FILES["archivoLogo"]['type'];
	        $archivoLogo = $_FILES["archivoLogo"]['name'];
	        if ($archivoLogo != "") {
		        $archivoLogo=sanear_string(str_replace(' ', '_', $archivoLogo));
	            // guardar el archivoLogo a la carpeta subidas
	            $prefijo = substr(md5(uniqid(rand())),0,6);
	            $destinoLogo =  "../../public/stores/".$prefijo."-".$archivoLogo;
	            if (copy($_FILES['archivoLogo']['tmp_name'],$destinoLogo)) {
	                $status = "ArchivoLogo subido: <b>".$archivoLogo."</b>";
	                $destinoLogo = $prefijo."-".$archivoLogo;

	                $result100 = mysql_query("SELECT * FROM stores WHERE id = $id_store");
				    while ($row100 = mysql_fetch_array($result100))
				    {
				    	if($row100["logo"] != ""){
				    		unlink('../../public/stores/'.$row100["logo"]);
				    	}
				    }
	            }
	        }

	        // datos de la imagen 1
	        $tamano = $_FILES["archivo1"]['size'];
	        $tipo = $_FILES["archivo1"]['type'];
	        $archivo1 = $_FILES["archivo1"]['name'];
	        if ($archivo1 != "") {
		        $archivo1=sanear_string(str_replace(' ', '_', $archivo1));
	            // guardar el archivo1 a la carpeta subidas
	            $prefijo = substr(md5(uniqid(rand())),0,6);
	            $destino1 =  "../../public/stores/".$prefijo."-".$archivo1;
	            if (copy($_FILES['archivo1']['tmp_name'],$destino1)) {
	                $status = "Archivo1 subido: <b>".$archivo1."</b>";
	                $destino1 = $prefijo."-".$archivo1;

	                $result100 = mysql_query("SELECT * FROM stores WHERE id = $id_store");
				    while ($row100 = mysql_fetch_array($result100))
				    {
				    	if($row100["imagen1"] != ""){
				    		unlink('../../public/stores/'.$row100["imagen1"]);
				    	}
				    }
	            }
	        }

	        // datos de la imagen 2
	        $tamano = $_FILES["archivo2"]['size'];
	        $tipo = $_FILES["archivo2"]['type'];
	        $archivo2 = $_FILES["archivo2"]['name'];
	        if ($archivo2 != "") {
		        $archivo2=sanear_string(str_replace(' ', '_', $archivo2));
	            // guardar el archivo2 a la carpeta subidas
	            $prefijo = substr(md5(uniqid(rand())),0,6);
	            $destino2 =  "../../public/stores/".$prefijo."-".$archivo2;
	            if (copy($_FILES['archivo2']['tmp_name'],$destino2)) {
	                $status = "Archivo2 subido: <b>".$archivo2."</b>";
	                $destino2 = $prefijo."-".$archivo2;

	                $result100 = mysql_query("SELECT * FROM stores WHERE id = $id_store");
				    while ($row100 = mysql_fetch_array($result100))
				    {
				    	if($row100["imagen2"] != ""){
				    		unlink('../../public/stores/'.$row100["imagen2"]);
				    	}
				    }
	            }
	        }

	        // datos de la imagen 3
	        $tamano = $_FILES["archivo3"]['size'];
	        $tipo = $_FILES["archivo3"]['type'];
	        $archivo3 = $_FILES["archivo3"]['name'];
	        if ($archivo3 != "") {
		        $archivo3=sanear_string(str_replace(' ', '_', $archivo3));
	            // guardar el archivo3 a la carpeta subidas
	            $prefijo = substr(md5(uniqid(rand())),0,6);
	            $destino3 =  "../../public/stores/".$prefijo."-".$archivo3;
	            if (copy($_FILES['archivo3']['tmp_name'],$destino3)) {
	                $status = "Archivo3 subido: <b>".$archivo3."</b>";
	                $destino3 = $prefijo."-".$archivo3;

	                $result100 = mysql_query("SELECT * FROM stores WHERE id = $id_store");
				    while ($row100 = mysql_fetch_array($result100))
				    {
				    	if($row100["imagen3"] != ""){
				    		unlink('../../public/stores/'.$row100["imagen3"]);
				    	}
				    }
	            }
	        }

	        // datos de la imagen 4
	        $tamano = $_FILES["archivo4"]['size'];
	        $tipo = $_FILES["archivo4"]['type'];
	        $archivo4 = $_FILES["archivo4"]['name'];
	        if ($archivo4 != "") {
		        $archivo4=sanear_string(str_replace(' ', '_', $archivo4));
	            // guardar el archivo4 a la carpeta subidas
	            $prefijo = substr(md5(uniqid(rand())),0,6);
	            $destino4 =  "../../public/stores/".$prefijo."-".$archivo4;
	            if (copy($_FILES['archivo4']['tmp_name'],$destino4)) {
	                $status = "Archivo4 subido: <b>".$archivo4."</b>";
	                $destino4 = $prefijo."-".$archivo4;

	                $result100 = mysql_query("SELECT * FROM stores WHERE id = $id_store");
				    while ($row100 = mysql_fetch_array($result100))
				    {
				    	if($row100["imagen4"] != ""){
				    		unlink('../../public/stores/'.$row100["imagen4"]);
				    	}
				    }
	            }
	        }

		    if ($destinoLogo == NULL) { $destinoLogo = $logo_actual; }
		    if ($destino1 == NULL) { $destino1 = $imagen1_actual; }
		    if ($destino2 == NULL) { $destino2 = $imagen2_actual; }
		    if ($destino3 == NULL) { $destino3 = $imagen3_actual; }
		    if ($destino4 == NULL) { $destino4 = $imagen4_actual; }
			
			$fechaActual = date('Y-m-d H:i:s');
			mysql_query("UPDATE stores SET nombre = '$nombre', logo = '$destinoLogo', team = '$team', horarios = '$horarios', imagen1 = '$destino1', imagen2 = '$destino2', imagen3 = '$destino3', imagen4 = '$destino4', ultima_actualizacion = '$fechaActual' WHERE id = $id_store");
			$respuesta_form = 1;

		}
		else
		{
			echo '<script>window.location = "'.$raiz.'app/stores";</script>';
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
			          <h3 class="panel-title">Lista
			            <small>Samsung Store</small>
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
							<th>Logo</th>
							<th>Store</th>
							<th>Usuario</th>
							<th>Ultima actualización</th>
							<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$onclick = "'ACCI&Oacute;N IRREVERSIBLE: Seguro que desea borrar a este elemento?'";
								$resultstores = mysql_query("SELECT * from stores ORDER BY id DESC");
								while ($rowCliente = mysql_fetch_array($resultstores))
								{

									$c++;
									echo '<tr><td>'.$c.'</td>';
									echo '<td><img src="'.$raiz_web.'/public/stores/'.$rowCliente["logo"].'" width="50%"/></td>';
									echo '<td>'.$rowCliente["nombre"].'</td>';

									$idUsuario = $rowCliente["usuario"];
									$usuario = mysql_query("SELECT * FROM usuarios_panel WHERE id = '$idUsuario'");
									while ($rowUsuario = mysql_fetch_array($usuario))
									{
										echo '<td>'.$rowUsuario["first_name"].'</td>';
									}

									if($rowCliente["ultima_actualizacion"] != null){
										echo '<td>'.date("d-m-Y H:i:s", strtotime($rowCliente["ultima_actualizacion"])).'</td>';
									} else {
										echo '<td>NUNCA</td>';
									}

									echo '<td class="text-nowrap">
										<a href="'.$raiz.'app/stores?editar&id='.$rowCliente["id"].'" class="btn btn-pure btn-warning" data-toggle="tooltip" data-original-title="Editar"><i class="icon wb-pencil" aria-hidden="true"></i></a>';
									if ($privilege<>3) {
										echo '<a href="'.$raiz.'app/stores?eliminar&id='.$rowCliente["id"].'" class="btn btn-pure btn-danger" data-toggle="tooltip" data-original-title="Eliminar" onclick="return confirm('.$onclick.')"><i class="icon wb-close" aria-hidden="true"></i></a>';
									}

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
			            <small>Samsung Store</small>
			          </h3>
				   </div>
				   <form action="<?php echo $raiz; ?>app/stores" method="POST" enctype="multipart/form-data">
				      <div class="panel-body">

				        <div class="form-group">
				            <label class="col-md-12 control-label" for="text-input">Nombre</label>
				            <div class="col-md-10">
				               <input type="text" id="text-input" name="nombre" class="form-control" placeholder="Nombre" required="">
				            </div>
				        </div>
				        <div class="form-group">
	                        <label class="col-md-12 control-label" for="text-input">Logo</label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivoLogo" type="file" id="file-input" class="form-control" />
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>
				        <div class="form-group">
				            <label class="col-md-12 control-label" for="text-input">Team Leaders</label>
				            <div class="col-md-10">
				               <input type="text" id="text-input" name="team" class="form-control" placeholder="Team Leaders" required>
				            </div>
				        </div>
						
				        <div class="form-group">
				            <label class="col-md-12 control-label" for="text-input">Horarios de Atención</label>
				            <div class="col-md-10">
				               <textarea id="textarea-input" name="horarios" required="" class="form-control"></textarea>
				            </div>
				        </div>
				        <div class="form-group">
	                        <label class="col-md-12 control-label" for="text-input">Imagen 1</label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo1" type="file" id="file-input" class="form-control" required />
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>
				        <div class="form-group">
	                        <label class="col-md-12 control-label" for="text-input">Imagen 2</label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo2" type="file" id="file-input" class="form-control" />
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>
				        <div class="form-group">
	                        <label class="col-md-12 control-label" for="text-input">Imagen 3</label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo3" type="file" id="file-input" class="form-control" />
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>
				        <div class="form-group">
	                        <label class="col-md-12 control-label" for="text-input">Imagen 4</label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo4" type="file" id="file-input" class="form-control" />
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>

				      </div>
				      <div class="panel-footer">
				         <button type="submit" name="crear_store" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Crear</button>
				         <a href="<?php echo $raiz;?>app/stores" class="btn btn-sm btn-primary"><i class="fa fa-ban"></i> Cerrar</a>
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
				echo '<script>window.location = "'.$raiz.'app/stores";</script>';
			}
			else
			{
				$result = mysql_query("SELECT * FROM stores WHERE id='$id_store'");
				while ($row = mysql_fetch_array($result))
				{
					$nombre = $row["nombre"];
					$logo_editar = $row["logo"];
					$team = $row["team"];
					$horarios = $row["horarios"];
					$imagen1 = $row["imagen1"];
					$imagen2 = $row["imagen2"];
					$imagen3 = $row["imagen3"];
					$imagen4 = $row["imagen4"];
				}
			}
		}
		else
		{
			echo '<script>window.location = "'.$raiz.'app/stores";</script>';
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
			            <small>Samsung Store</small>
			          </h3>
				   </div>
				   <form action="<?php echo $raiz; ?>app/stores" method="POST" enctype="multipart/form-data">
				      <div class="panel-body">

				         <div class="form-group">
				            <label class="col-md-12 control-label" for="text-input">Nombre</label>
				            <div class="col-md-10">
				               <input type="text" id="text-input" name="nombre" class="form-control" value="<?php echo $nombre; ?>" required="">
				            </div>
				         </div>
				         <div class="form-group">
	                        <label class="col-md-3 control-label" for="text-input">Logo </label>
	                        <div class="col-md-9">
	                        <div class="input-group col-sm-6">
	                        	<img src="<?php echo $raiz_web; ?>public/stores/<?php echo $logo_editar; ?>" width="25%"/>
	                        	<input type="hidden" name="logo_actual" value="<?php echo $logo_editar; ?>" />
	                        </div>
	                            <span class="help-block"></span>
	                        </div>
	                    </div>
				         <div class="form-group">
	                        <label class="col-md-12 control-label" for="text-input">Logo (ALTA CALIDAD) </label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivoLogo" type="file" id="file-input" class="form-control" />
	                        </div>
	                            <span class="help-block">Dejar VACIO para no realizar cambios.</span>
	                        </div>
	                    </div>
	                    <div class="form-group">
				            <label class="col-md-12 control-label" for="text-input">Team Leaders</label>
				            <div class="col-md-10">
				               <input type="text" id="text-input" name="team" class="form-control" value="<?php echo $team; ?>" required="">
				            </div>
				         </div>
	                    <div class="form-group">
				            <label class="col-md-12 control-label" for="text-input">Horarios de Atención</label>
				            <div class="col-md-10">
				               <textarea id="textarea-input" name="horarios" required="" class="form-control"><?php echo $horarios ?></textarea>
				            </div>
				         </div>
				         <div class="form-group">
	                        <label class="col-md-3 control-label" for="text-input">Imagen 1 actual </label>
	                        <div class="col-md-9">
	                        <div class="input-group col-sm-6">
	                        	<?php 

			                    	if($imagen1 != ""){
			                     ?>
			                        	<img src="<?php echo $raiz_web; ?>public/stores/<?php echo $imagen1; ?>" width="60%"/>
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
	                        <label class="col-md-12 control-label" for="text-input">Imagen 1 (ALTA CALIDAD) </label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo1" type="file" id="file-input" class="form-control" />
	                        </div>
	                            <?php 

			                    	if($imagen1 != ""){
			                     ?>
	                            		<span class="help-block">Dejar VACIO para no realizar cambios.</span>
	                        	<?php } ?>
	                        </div>
	                    </div>
				         <div class="form-group">
	                        <label class="col-md-3 control-label" for="text-input">Imagen 2 actual </label>
	                        <div class="col-md-9">
	                        <div class="input-group col-sm-6">
	                        	<?php 

			                    	if($imagen2 != ""){
			                     ?>
			                        	<img src="<?php echo $raiz_web; ?>public/stores/<?php echo $imagen2; ?>" width="60%"/>
	                        			<input type="hidden" name="imagen2_actual" value="<?php echo $imagen2; ?>" />
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
	                        <label class="col-md-12 control-label" for="text-input">Imagen 2 (ALTA CALIDAD) </label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo2" type="file" id="file-input" class="form-control" />
	                        </div>
	                            <?php 

			                    	if($imagen2 != ""){
			                     ?>
	                            		<span class="help-block">Dejar VACIO para no realizar cambios.</span>
	                        	<?php } ?>
	                        </div>
	                    </div>
				         <div class="form-group">
	                        <label class="col-md-3 control-label" for="text-input">Imagen 3 actual </label>
	                        <div class="col-md-9">
	                        <div class="input-group col-sm-6">
	                        	<?php 

			                    	if($imagen3 != ""){
			                     ?>
			                        	<img src="<?php echo $raiz_web; ?>public/stores/<?php echo $imagen3; ?>" width="60%"/>
	                        			<input type="hidden" name="imagen3_actual" value="<?php echo $imagen3; ?>" />
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
	                        <label class="col-md-12 control-label" for="text-input">Imagen 3 (ALTA CALIDAD) </label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo3" type="file" id="file-input" class="form-control" />
	                        </div>
	                            <?php 

			                    	if($imagen3 != ""){
			                     ?>
	                            		<span class="help-block">Dejar VACIO para no realizar cambios.</span>
	                        	<?php } ?>
	                        </div>
	                    </div>
				         <div class="form-group">
	                        <label class="col-md-3 control-label" for="text-input">Imagen 4 actual </label>
	                        <div class="col-md-9">
	                        <div class="input-group col-sm-6">
	                        	<?php 

			                    	if($imagen4 != ""){
			                     ?>
			                        	<img src="<?php echo $raiz_web; ?>public/stores/<?php echo $imagen4; ?>" width="60%"/>
			                        	<input type="hidden" name="imagen4_actual" value="<?php echo $imagen4; ?>" />
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
	                        <label class="col-md-12 control-label" for="text-input">Imagen 4 (ALTA CALIDAD) </label>
	                        <div class="col-md-10">
	                        <div class="input-group col-sm-12">
	                        	<span class="input-group-addon"><i class="fa fa-image"></i></span>
	                            <input name="archivo4" type="file" id="file-input" class="form-control" />
	                        </div>
	                        	<?php 

			                    	if($imagen4 != ""){
			                     ?>
	                            		<span class="help-block">Dejar VACIO para no realizar cambios.</span>
	                        	<?php } ?>
	                        </div>
	                    </div>

				      </div>
				      <div class="panel-footer">
                       	<input type="hidden" name="id" value="<?php echo $id_store; ?>" />
				         <button type="submit" name="editar_store" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Editar</button>
				         <a href="<?php echo $raiz;?>app/stores" class="btn btn-sm btn-primary"><i class="fa fa-ban"></i> Cerrar</a>
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
