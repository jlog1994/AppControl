<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from datos_generales where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $nombre=$row["nombre"];
	  $a_paterno=$row["a_paterno"];
	  $a_materno=$row["a_materno"];
	   $sexo=$row["sexo"];
	  $edad=$row["edad"];
	 
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
		<h1>Modificacion Datos</h1>
		<a href="datos.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		<form name="formreg" action="actualizacion.php" method="POST">
		<input type="hidden" name="nc" value="<?php echo $nc;?>" />
          <label for="basic">Nombre:</label>
          <input type="text" name="nombre" id="basic" value="<?php echo $nombre;?>" required />
    	  <label for="basic">Apellido Paterno:</label>
          <input type="text" name="a_paterno" id="basic" value="<?php echo $a_paterno;?>" required />
          <label for="basic">Apellido Materno:</label>
          <input type="text" name="a_materno" id="basic" value="<?php echo $a_materno;?>" required />
    	  <label for="basic">Sexo:</label>
          <select name="sexo" id="select-choice-a" data-native-menu="false">
          <option value="<?php echo $sexo; ?>"/><?php echo $sexo3; ?></option/>	
           <option value="H">H</option>
           <option value="M">M</option>
           </select> 
          <label for="basic">Edad:</label>
          <input type="number" name="edad" id="basic" value="<?php echo $edad;?>" required />
		   <input type="hidden" name="fn" value="12" />
		  <input type="submit" name="envio" value="Guardar"/>
		 </form>
		 <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="12" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form> 
		</div>
	</div>
</body>
</html>
	   	   