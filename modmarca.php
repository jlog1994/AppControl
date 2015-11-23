<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from marca where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $nom_marca=$row["nom_marca"];

?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	
</head>
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

	   	   