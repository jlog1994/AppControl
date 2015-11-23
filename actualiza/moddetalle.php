<?php 
	  require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
	  $consulta="select * from compras where id='".$nc."'";
	  $recordset=mysql_query($consulta);
	  $row=mysql_fetch_array($recordset);
      $fecha_compra=$row["fecha_compra"];
	  $cantidad=$row["cantidad"];
	  $total=$row["total"];
	  $subtotal=$row["subtotal"];
	  $ref_producto=$row["ref_producto"];

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
		<h1>Modificacion Compra</h1>
		<a href="compra.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">

		</div>
	</div>
</body>
</html>
	   	   