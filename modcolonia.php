<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from colonia where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $nomb=$row["nombre_colonia"];
	  $refc=$row["ref_ciudad"];

?>
    <head>
 	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	</head>
	
	<div data-role="content">
		<form id="form1" target="cont" action="actualizacion.php" method="post">
		<input type="hidden" name="nc" value="<?php echo $nc;?>" />
		<label for="basic">Nombre Colonia:</label>
		<input type="text" name="nombre_colonia" id="basic" value="<?php echo $nomb;?>" placeholder="Nombre del Estado">
		<label for="basic">REF Ciudad:</label>
          
		  <?php include("conexion.php");
          $consulta="select *from ciudad where id=$refc";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from ciudad";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="ref_ciudad" id="ref_ciudad">
  		  	<option value="<?php echo $refc;?>" selected>
  		  	<?php echo $row2["nom_ciudad"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["nom_ciudad"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["nom_ciudad"]?>
  		  		</option><?php	} } ?>
  		  </select>			

	      <input type="hidden" name="fn" value="9" />
		  <input type="submit" name="envio" value="Guardar" data-theme="e" />
		</form>
				 <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="9" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>
		</div>

	   	   