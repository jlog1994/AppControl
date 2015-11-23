<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from productos where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $nom_producto=$row["nom_producto"];
	  $precio=$row["precio"];
	   $cantidad=$row["cantidad"];
	    $rm=$row["ref_marca"];
	     $rp=$row["ref_proveedor"];

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
		<label for="basic">Nombre producto:</label>
		<input type="text" name="nom_producto"  value="<?php echo $nom_producto;?>"placeholder="Nombre producto">
		<label for="basic">Precio:</label>
		<input type="number" name="precio" value="<?php echo $precio;?>"placeholder="Nombre producto">
		<label for="basic">Cantidad:</label>
		<input type="number" name="cantidad" value="<?php echo $cantidad;?>"placeholder="Nombre producto">
		<label for="basic">REF marca:</label>
		
		  <?php include("conexion.php");
          $consulta="select *from marca where id=$rm";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from marca";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="ref_marca" id="ref_marca">
  		  	<option value="<?php echo $rm;?>" selected>
  		  	<?php echo $row2["nom_marca"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["nom_marca"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["nom_marca"]?>
  		  		</option><?php	} } ?>
  		  </select>

		<label for="basic">REF Proveedor:</label>
		
		  <?php include("conexion.php");
          $consulta="select *from proveedor where id=$rp";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from proveedor";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="ref_proveedor" id="ref_proveedor">
  		  	<option value="<?php echo $rp;?>" selected>
  		  	<?php echo $row2["nombre"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["nombre"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["nombre"]?>
  		  		</option><?php	} } ?>
  		  </select>
		
	      <input type="hidden" name="fn" value="11">
		  <input type="submit" name="envio" value="Guardar" data-theme="e">
		</form>
				 <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="11" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>
		</div>
	
	   	   