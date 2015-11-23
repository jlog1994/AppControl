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
	   	<div class="content-primary">
	   	<?php
	   	include('conexion.php');
	   	$consulta="select * from ventas";
	   	$recordset=mysql_query($consulta);
	   	?>
	   	   <ul data-role="listview" data-split-icon="gear" data-split-theme="d">
	   	   <?php while ($row=mysql_fetch_array($recordset)){?>
	   	   <li><?php echo '<a target="cont" href="modventa.php?nc='.$row["id"].'">';?>
	   	      <img src="<?php if($row["foto"]==NULL){echo 'images/c.png';}
	   	      else {echo 'mostrarfoto.php?nc='.$row["ncontrol"];}?>" width="50" heigth="55"/>
	   	      <h3><?php echo $row["fecha_venta"];?></h3>
	   	      <p><?php echo $row["total"];?></p>
	   	      </a>
	   	      <a ref="#purchase" data-rel="popup" data-position-to="window"
	   	      data-transition="pop"><?php echo $row["fecha_venta"]?></a>
	   	      </li>
	   	      <?php } ?>
	   	      </ul>
	   	      <div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b"
	   	      class="ui-content" style="max-width:340px;">
	   	         <h3>Purchase Album?</h3>
	   	         <p>Your download will begin inmediately on your mobile device when you purchase.</p>
	   	         <a href="index.html" data-role="button" data-rel="back" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Buy:$10.99</a>
	   	         <a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>
	   	         </div>
	   	         </div><!--/content-primary-->
				 
	   	    </div><!--/content-->
