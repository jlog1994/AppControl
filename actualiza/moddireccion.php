<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from direccion where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $calle=$row["calle"];
      $numero=$row["numero"];
      $ref_colonia=$row["ref_colonia"];
?>

<!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Productos </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.2.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<link rel="stylesheet" href="css/jquery.mobile-1.3.2.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.3.2.js"></script>
</head> 
<body>
	<div data-role="page" id="ciudad"> 
	<div data-role="header">
		<h1>Modificacion estado</h1>
		<a href="direccion.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="actualizacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value="<?php echo $calle;?>" required />
    	  <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value="<?php echo $numero;?>" required />
    	  <label for="basic">Ref_colonia:</label>
    	  <input type="number" name="ref_colonia" id="basic" value="<?php echo $ref_colonia;?>" required />
    	  <input type="hidden" name="fn" value="1">
		  <input type="submit" name="envio" value="Guardar">
		 </form> 
		 <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="1" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>
		</div>
	</div>
</body>
</html>
	   	   