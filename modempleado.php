<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from empleados where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
		$nomb=$row['nombre'];
		$ape=$row['apellidos'];
		$telef=$row['telefono'];
		$fec=$row['fechan'];
		$dir=$row['ref_direccion'];

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
		 <form name="formreg" target="cont" action="actualizacion.php" method="POST">
		 <input type="hidden" name="nc" value="<?php echo $nc;?>" />
          <label for="basic">Nombre:</label>
          <input type="text" name="nombre" id="basic" value="<?php echo $nomb;?>" required >
    	  <label for="basic">Apellidos:</label>
          <input type="text" name="apellidos" id="basic" value="<?php echo $ape;?>" required >
		  <label for="basic">Apellidos:</label>
          <input type="text" name="apellidos" id="basic" value="<?php echo $ape;?>" required >
          <label for="basic">Telefono:</label>
          <input type="tel" name="telefono" id="basic" value="<?php echo $telef;?>" required >
		  <label for="basic">Direccion:</label>
          <?php include("conexion.php");
          $consulta="select *from direccion where id=$dir";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from direccion";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="ref_direccion" id="ref_direccion">
  		  	<option value="<?php echo $dir;?>" selected>
  		  	<?php echo $row2["calle"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["ref_direccion"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["calle"]?>
  		  		</option><?php	} } ?>
  		  </select>			  
		  
    	  <input type="hidden" name="fn" value="3" >
		  <input type="submit" name="envio" value="Guardar" >
		 </form> 

		  <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="3" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>
		</div>

	   	   