	<?php include("conexion.php");?>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
		<h1>Registro Marca</h1>
		<form id="form1" action="insertar.php" method="post">
		<label for="basic">Nombre Marca:</label>
		<input type="text" name="nom_marca" id="basic" value="" placeholder="Marca">
	      <input type="hidden" name="fn" value="10" >
		  <input type="submit" name="envio" value="Guardar"data-theme="e" >
		</form>