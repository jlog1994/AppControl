<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from ventas where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $fecha_venta=$row["fecha_venta"];
      $monto=$row["total"];
	  $ref_cli=$row["ref_clientes"];
	  $ref_emp=$row["ref_empleado"];


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
          <label for="basic">Fecha de la Venta:</label>
          <input type="date" name="fecha_venta" id="basic" value="<?php echo $fecha_venta;?>" required />
          <label for="basic">Monto:</label>
          <input type="number" name="total" id="basic" value="<?php echo $monto;?>" required />          
          <label for="basic">Referencia a Cliente:</label>
		  <?php include("conexion.php");
          $consulta="select *from clientes where id=$ref_cli";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from clientes";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="ref_clientes" id="ref_clientes">
  		  	<option value="<?php echo $ref_cli;?>" selected>
  		  	<?php echo $row2["nombre"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["nombre"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["nombre"]?>
  		  		</option><?php	} } ?>
  		  </select>	
		<label for="basic">Referencia a Empleado:</label>
		  <?php include("conexion.php");
          $consulta="select *from empleados where id=$ref_emp";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from empleados";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="ref_empleado" id="ref_empleado">
  		  	<option value="<?php echo $ref_emp;?>" selected>
  		  	<?php echo $row2["nombre"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["nombre"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["nombre"]?>
  		  		</option><?php	} } ?>
  		  </select>			  
    	  <input type="hidden" name="fn" value="5" />
		  <input type="submit" name="envio" value="Guardar" />
		 </form> 
		 		 <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="5" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>
		</div>

	   	   