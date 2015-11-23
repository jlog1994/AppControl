<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from ciudad where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $nombre_ciudad=$row["nom_ciudad"];
	  $codigo_postal=$row["codigo_postal"];
	  $refe=$row["ref_estado"];

?>
    <head>
 	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>

	<div data-role="content">
		<form id="form1" target="cont" action="actualizacion.php" method="post">
		<h1>Modificacion Ciudad</h1>
		<input type="hidden" name="nc" value="<?php echo $nc;?>" />
		<label for="basic">Nombre Ciudad:</label>
		<input type="text" name="nom_ciudad" id="basic" value="<?php echo $nombre_ciudad;?>" placeholder="Nombre Ciudad">
		<label for="basic">Codigo Postal:</label>
		<input type="number" name="codigo_postal" id="basic" value="<?php echo $codigo_postal;?>" placeholder="Codigo Postal">
		<label for="basic">REF Estado:</label>
          <?php include("conexion.php");
          $consulta="select *from estado where id=$refe";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from estado";
          $recordset=mysql_query($consulta);
          ?> 
  		  <select name="ref_estado" id="ref_estado">
  		  	<option value="<?php echo $refe;?>" selected>
  		  	<?php echo $row2["nom_estado"]?>
  		  	</option>
  		  	<?php 
  		  	while ($row=mysql_fetch_array($recordset)) {?>
  		  		<?php  if ($dir!=$row["nom_estado"]){ ?>
  		  		<option value="<?php echo $row["id"];?>">
  		  			<?php echo $row["nom_estado"]?>
  		  		</option><?php	} } ?>
  		  </select>			
	      <input type="hidden" name="fn" value="8" />
		  <input type="submit" name="envio" value="Guardar" data-theme="e"/>
		</form>
		  <form name="eliminar" action="eliminacion.php" method="POST">
		  <input type="hidden" name="nc" value="<?php echo $nc;?>" />
		  <input type="hidden" name="fn" value="8" />
		  <input type="submit" name="envio" value="Eliminar" />
		  </form>
		</div>
	   	   