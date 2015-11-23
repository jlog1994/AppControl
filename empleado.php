	<?php include("conexion.php");?>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<h1>Datos del Empleado</h1>
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Nombre:</label>
          <input type="text" name="nombre" id="basic" value="" required />
    	  <label for="basic">Apellidos:</label>
          <input type="text" name="apellidos" id="basic" value="" required />
		  <label for="basic">Fecha de Nacimiento:</label>
          <input type="date" name="fechan" id="basic" value="" required />
		   <label for="basic">Telefono:</label>
          <input type="number" name="telefono" id="basic" value="" required />

    	  <label for="basic">Ref Direccion:</label>
		  <?php $result=mysql_query("select * FROM direccion"); 
		  $row=mysql_fetch_array($result);?> 	
	  		  <select name="ref_direccion" id="ref_direccion"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['calle']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>	
    	  <input type="hidden" name="fn" value="3">
		  <input type="submit" name="envio" value="Guardar">
		 </form> 