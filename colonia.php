	<?php include("conexion.php");?>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
		<h1>Registro Colonia</h1>
		<form id="form1" target="cont"action="insertar.php" method="POST">
		<label for="basic">Nombre Colonia:</label>
		<input type="text" name="nombre_colonia" id="basic" value="" placeholder="Nombre Colonia">
		<label for="basic">REF Ciudad:</label>
    	  <?php $result=mysql_query("select * FROM ciudad"); 
		  $row=mysql_fetch_array($result);?> 
  		  <select name="ref_ciudad" id="ref_ciudad"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['nom_ciudad']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>
		      <input type="hidden" name="fn" value="9">
		  <input type="submit" name="envio" value="Guardar" data-theme="e">
		</form>