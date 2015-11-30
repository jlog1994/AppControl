<?php require('seguridad.php'); ?>
<!DOCTYPE html> 
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>jQuery Mobile Docs - Split Button Lists</title> 
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.2.1.css" />  
	<link rel="stylesheet" href="../_assets/css/jqm-docs.css"/>
	<script src="js/jquery.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="js/jquery.mobile-1.2.1.js"></script>

</head> 
<body> 

	<div data-role="page" class="type-interior" id="album-list">

		<div data-role="header" data-theme="f">
		<h1>Lista de estudiantes</h1>
		<a href="index2.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>
	</div><!-- /header -->

	
	<div data-role="content">
		<div class="content-primary">
		
		
		<?php 
		include('conexion.php');
	  $consulta="select * from alumnos";
	  $recordset=mysql_query($consulta);
	  ?>
	    <ul data-role="listview" data-split-icon="gear" data-split-theme="d">
	    <?php while ($row=mysql_fetch_array($recordset)){?>
        <li><?php echo '<a href="modalumnos.php?nc='.$row["ncontrol"].'" >';?>
				<img src="<?php  if($row["foto"]==NULL){echo 'images/i.png';}
				else{echo 'mostrarfoto.php?nc='.$row["ncontrol"];}?>" width="50" height="55" />
				<h3><?php echo $row["nombre"]?></h3>
				<p><?php echo $row["nombre"]?></p>
				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop"><?php echo $row["nombre"]?></a>				
		</li>
		 <?php } ?>	
		</ul>		
		<div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
			<h3>Purchase Album?</h3>
			<p>Your download will begin immediately on your mobile device when you purchase.</p>
			<a href="index.html" data-role="button" data-rel="back" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Buy: $10.99</a>
			<a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>	
		</div>
		
		</div><!--/content-primary -->		
	</div><!-- /content -->

	<div data-role="footer" class="footer-docs" data-theme="c">
		<p class="jqm-version"></p>
		<p>Copyright 2010, 2013 jQuery Foundation, Inc. and other contributors</p>
	</div>

	</div><!-- /page -->

	</body>
	</html>
