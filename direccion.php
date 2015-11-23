	<?php include("conexion.php");?>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<h1>Dar Alta una Direccion</h1>
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value="" required />
    	  <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value="" required />
    	  <label for="basic">Ref colonia:</label>
		  <?php $result=mysql_query("select * FROM colonia"); 
		  $row=mysql_fetch_array($result);?> 	
	  		  <select name="ref_colonia" id="ref_colonia"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['nombre_colonia']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>	  
    	  <input type="hidden" name="fn" value="1">
		  <input type="submit" name="envio" value="Guardar">
		 </form> 
