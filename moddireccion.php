<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from direccion where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $calle=$row["calle"];
      $numero=$row["numero"];
      $refcol=$row["ref_colonia"];
?>
<head>
   	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head> 
	<div data-role="content">
		 <form name="formreg" target="cont" action="actualizacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value="<?php echo $calle;?>" required />
    	  <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value="<?php echo $numero;?>" required />
    	  <label for="basic">Ref_colonia:</label>
		  
		   <?php include("conexion.php");
          $consulta="select *from colonia where id=$refcol";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from colonia";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="ref_colonia" id="ref_colonia">
  		  	<option value="<?php echo $refcol;?>" selected>
  		  	<?php echo $row2["nombre_colonia"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["nombre_colonia"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["nombre_colonia"]?>
  		  		</option><?php	} } ?>
  		  </select>	
    	  <input type="hidden" name="fn" value="1">
		  <input type="submit" name="envio" value="Guardar">
		 </form> 
		 <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="1" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>

	   	   