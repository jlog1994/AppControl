	<?php include("conexion.php");?>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
		<h1>Registro Ciudad</h1>
		<form id="form1" target="cont" action="insertar.php" method="post">
		<label for="basic">Nombre Ciudad:</label>
		<input type="text" name="nom_ciudad" id="basic" value="" placeholder="Nombre del Estado">
		<label for="basic">Codigo Postal:</label>
		<input type="number" name="codigo_postal" id="basic" value="Codigo Postal">
		<label for="basic">REF Estado:</label>
    	  <?php $result=mysql_query("select * FROM estado"); 
		  $row=mysql_fetch_array($result);?> 
  		  <select name="ref_estado" id="ref_estado"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['nom_estado']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>
		     <input type="hidden" name="fn" value="8">
		  <input type="submit" name="envio" value="Guardar" data-theme="e">
		</form>