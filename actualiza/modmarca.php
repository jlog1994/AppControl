<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from marca where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $nom_marca=$row["nom_marca"];

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
		<h1>Modificacion Marca</h1>
		<a href="marca.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		<form id="form1" action="actualizacion.php" method="post">
		<input type="hidden" name="nc" value="<?php echo $nc;?>" />
		<label for="basic">Nombre Marca:</label>
		<input type="text" name="nom_marca" id="basic" value="<?php echo $nom_marca;?>">
		 <input type="hidden" name="fn" value="10" >
		  <input type="submit" name="envio" value="Guardar" >
		</form>
		<form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="10" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>
		</div>
	</div>
</body>
</html>
	   	   