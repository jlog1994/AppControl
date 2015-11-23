<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from productos where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $nom_producto=$row["nom_producto"];
	  $precio=$row["precio"];
	   $cantidad=$row["cantidad"];
	    $ref_marca=$row["ref_marca"];
	     $ref_proveedor=$row["ref_proveedor"];

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
		<h1>Modificacion Productos</h1>
		<a href="productos.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		<form id="form1" action="insertar.php" method="post">
			 <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		<label for="basic">Nombre producto:</label>
		<input type="text" name="nom_producto"  value="<?php echo $nom_producto;?>"placeholder="Nombre producto">
		<label for="basic">Precio:</label>
		<input type="number" name="precio" value="<?php echo $precio;?>"placeholder="Nombre producto">
		<label for="basic">Cantidad:</label>
		<input type="number" name="cantidad" value="<?php echo $cantidad;?>"placeholder="Nombre producto">
		<label for="basic">REF marca:</label>
		<input type="number" name="ref_marca" value="<?php echo $ref_marca;?>"placeholder="Nombre producto">
		<label for="basic">REF Proveedor:</label>
		<input type="number" name="ref_proveedor" value="<?php echo $ref_proveedor;?>"placeholder="Nombre producto">
	      <input type="hidden" name="fn" value="11">
		  <input type="submit" name="envio" value="Guardar" data-theme="e">
		</form>
				 <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="11" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>
		</div>
	</div>
</body>
</html>
	   	   