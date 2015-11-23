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
		<label for="basic">Fecha Venta:</label>
		<input type="date" name="fecha_venta" id="basic" value="" placeholder="Nombre del Estado">
		<label for="basic">Total:</label>
		<input type="number" name="total" id="basic" value="Codigo Postal">
		<label for="basic">RRF Cliente:</label>
		<?php $result=mysql_query("select * FROM clientes"); 
		  $row=mysql_fetch_array($result);?> 	
	  		  <select name="ref_clientes" id="s"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['nombre']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>
<label for="basic">RRF Empleado:</label>
		<?php $result=mysql_query("select * FROM empleados"); 
		  $row=mysql_fetch_array($result);?> 	
	  		  <select name="ref_empleado" id="ref_empleado"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['nombre']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>
		      <input type="hidden" name="fn" value="5">
		  <input type="submit" name="envio" value="Guardar" data-theme="e">
		</form>