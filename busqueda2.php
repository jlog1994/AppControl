<?php require('seguridad.php'); ?>
<!--Declaracion del tipo de documento como HTML5-->
<head>
   	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head> 
		<a href="productosL1.php" target="cont" data-role="button" data-icon="back" 
		data-iconpos="notext" data-theme="b" data-iconpos="left" data-inline="true"></a>
	<div data-role="content">
		 <form name="busqueda" target="cont" action="busqueda2.php" method="POST">
		     <label for="criterio" class="select">Criterio a buscar:</label>
			 <select name="criterio" id="criterio">
			 <option value="nc">ID</option>
             <option value="nom">Nombre</option>      
          </select>
		  <label for="basic">Dato a buscar:</label>
          <input type="text" name="dato" id="basic" value="" required />
    	  

     	  <input type="submit" name="envio" value="Buscar" />
		 </form>
		 
		 <form name="busqueda" action="busqueda2.php" method="POST">
		 <div class="content-primary">
			<?php
			if(isset($_REQUEST["criterio"]) and isset($_REQUEST["dato"])){
    		include('conexion.php');
			$cri=$_REQUEST["criterio"];
		    $dato=$_REQUEST["dato"];
			if ($cri=='nc')
    	       $consulta="select * from productos where id like '%".$dato."%'";
			if ($cri=="nom")
    	       $consulta="select * from productos where nom_producto  like '%".$dato."%'"; 
    	  	$recordset=mysql_query($consulta);
		 
    	  ?>
    	    <ul data-role="listview" data-split-icon="gear" data-split-theme="d">
    	    <?php while ($row=mysql_fetch_array($recordset)){?>
            <li><?php echo '<a target="cont" href="fotoproduc.php?nc='.$row["id"].'">';?>
			<img src="images/ajax-loader.gif" width="20" height="20" />
				<img src="<?php  if($row["foto"]==NULL){echo 'img/logo.png';}
				else{echo 'mostrarfoto.php?nc='.$row["id"];}?>" width="50" height="55" />
    				<h3><?php echo $row["nom_producto"]?></h3>
    				<p><?php echo $row["precio"]?></p>
    				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop"><?php echo $row["nombre"]?></a>				
    		</li>
    		 <?php } }?>	
    		</ul>		
    		<div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
    			<h3>Purchase Album?</h3>
    			<p>Your download will begin immediately on your mobile device when you purchase.</p>
    			<a href="index.html" data-role="button" data-rel="back" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Buy: $10.99</a>
    			<a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>	
    		</div>
		
		</div><!--/content-primary -->		
		 </form> 	 	 
	</div> 
	