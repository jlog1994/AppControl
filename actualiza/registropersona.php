<!--?php require('seguridad.php'); ?-->
<?php require('conexion.php'); 
 ?>
<!--Declaracion del tipo de documento como HTML5-->
<!DOCTYPE html>
<html> 
<head> 

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Demos and Documentation</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.2.1.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<script src="js/jquery.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="js/jquery.mobile-1.2.1.js"></script>
</head> 
<body> 
	<div data-role="page"> 
	
		<h1 align="center">Registro de Personas</h1>
	
	<div data-role="content">
		 <form name="formreg" action="consultapersona.php" method="POST">
          
    	  <label for="basic"/>Nombre</label>
          <input type="text" name="Nombre" id="basic" value="" required />
    	  
    	  <label for="basic"/>Apellidos</label>
          <input type="text" name="Apellidos" id="basic" value="" required />
    	  <label for="slider-fill"/>Edad:</label>
    	  <input type="range" name="Edad" id="slider-fill" value="18" min="0" max="60" data-highlight="true" />
    	  <label for="basic"/>telefono</label>
          <input type="tel" name="Telefono" id="basic" value="" required />
    	  <label for="basic"/>Direccion</label>
    	  <?php $result=mysql_query("select * FROM direccio"); 
		  $row=mysql_fetch_array($result);?> 
  		  <select name="refDireccion" id="refDireccion"> 
            <?php 
				do {   
			?> 
          	<option value="<?php echo $row['id']?>"><?php echo $row['NombreColonia']?></option> 
          	<?php 
				} while ($row = mysql_fetch_assoc($result)); 
			?> 
        	</select>
          
    	  <input type="hidden" name="fn" value="1" />
		  <input type="submit" name="envio" value="Guardar" />
		 </form> 
	</div> 
	<div data-role="footer">
	</div>
</div>
</body>
</html>