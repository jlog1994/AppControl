
<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from personas where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $nombre=$row["Nombre"];
	  $ape=$row["Apellidos"];
	  $edad=$row["Edad"];
	  $telefono=$row["Telefono"];
	  $dir=$row["refDireccion"];
?>
<!--Declaracion del tipo de documento como HTML5-->
<!DOCTYPE html>
<html> 
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Demos and Documentation</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.2.1.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<script src="js/jquery.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="js/jquery.mobile-1.2.1.js"></script>
</head> 
<body> 
	<div data-role="page"> 
		<h1 align="center">Detalles de Personas</h1>
	<div data-role="content">
		 <form name="formreg" action="consultapersona.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />	   
          <label for="basic"/>Nombre:</label>
          <input type="text" name="Nombre" id="basic" value="<?php echo $nombre;?>" required />
          <label for="basic"/>Apellidos:</label>
          <input type="text" name="Apellidos" id="basic" value="<?php echo $ape;?>" required />
    	  <label for="slider-fill"/>Edad:</label>
    	  <input type="range" name="Edad" id="slider-fill" value="<?php echo $edad;?>" min="0" max="60" data-highlight="true" />
    	   <label for="basic"/>Telefono:</label>
          <input type="tel" name="Telefono" id="basic" value="<?php echo $telefono;?>" required />
          <label for="basic"/>Direccion:</label>
          <?php include("conexion.php");
          $consulta="select *from direcciones where id=$dir";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from direcciones";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="refDireccion" id="refDireccion">
  		  	<option value="<?php echo $dir;?>" selected>
  		  	<?php echo $row2["NombreColonia"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["refDireccion"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["NombreColonia"]?>
  		  		</option><?php	} } ?>
  		  </select>
  		  <input type="submit" name="envio" value="Actualizar" />
		  <input type="hidden" name="fn" value="2" />
		 </form>
		  <form name="eliminar" action="consultapersona.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="submit" name="envio" value="Eliminar" />
		  <input type="hidden" name="fn" value="3" />
		 </form>  
	</div> 
	<div data-role="footer">
	</div>
</div>
</body>
</html>