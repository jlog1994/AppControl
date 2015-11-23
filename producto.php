	<?php include("conexion.php");?>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
		<h1>Registro Productos</h1>
		<form id="form1" target="cont" action="insertar.php" method="post">
			<label for="basic">Nombre producto:</label>
			<input type="text" name="nom_producto" placeholder="Nombre producto">
			<label for="basic">Precio:</label>
			<input type="number" name="precio" placeholder="Precio">
			<label for="basic">Cantidad:</label>
			<input type="number" name="cantidad" placeholder="Cantidad">
		
			<label for="basic">REF marca:</label>

		  <?php $result=mysql_query("select * FROM marca"); 
		  $row=mysql_fetch_array($result);?> 	
	  		  <select name="ref_marca" id="ref_marca"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['nom_marca']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>
	
		<label for="basic">R Proveedor:</label>
		  <?php $result=mysql_query("select * FROM proveedor"); 
		  $row=mysql_fetch_array($result);?> 	
	  		  <select name="ref_proveedor" id="ref_proveedor"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['nombre']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>
			
	      <input type="hidden" name="fn" value="11">
		  <input type="submit" name="envio" value="Guardar" data-theme="e">
		</form>
	