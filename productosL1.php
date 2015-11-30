<head>
   	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head> 
		<a href="home.html" target="cont" data-role="button" data-icon="back" 
		data-iconpos="notext" data-theme="b" data-iconpos="left" data-inline="true"></a>		
	<div data-role="content">

		<div class="content-primary">

		<?php 
		include('conexion.php');
	  $consulta="select * from productos";
	  $recordset=mysql_query($consulta);
	  ?>
	    <ul data-role="listview" data-split-icon="gear" data-split-theme="d">
	    <?php while ($row=mysql_fetch_array($recordset)){?>
        <li><?php echo '<a target="cont" href="modproductos.php?nc='.$row["id"].'" >';?>
				<img src="<?php  if($row["foto"]==NULL){echo 'img/logo.png';}
				else{echo 'foto.php?nc='.$row["id"];}?>" width="50" height="55" />
				<h3><?php echo $row["nom_producto"]?></h3>
				<p><?php echo $row["precio"]?></p>
				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">
				<?php echo $row["nom_producto"]?></a>				
		</li>
		 <?php } ?>	
		</ul>		
		<div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
			<h3>Desea Agregar una foto?</h3>
			
			<p>Cargar un imagen para identificar los productos.</p>
			<?php while ($row=mysql_fetch_array($recordset)){?>
			<a href="#" data-role="button" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Agregrar</a>'
			
			<a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>	
		<?php } ?>	
		</div>
		
		</div><!--/content-primary -->		
	</div><!-- /content -->
