<!--?php
session_start();
if (!isset($_SESSION['usuario']))
  die("No esta autorizado a ingresar.");
?-->
<?php include("conexion.php");?>
<!DOCTYPE html> 
<html>
<head>
	<title>Sistema de Administaracion y Control</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.2.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<link rel="stylesheet" href="css/jquery.mobile-1.3.2.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.3.2.js"></script>
	</head>
<body>
	<div data-role="page" id="menu"  data-theme="c"> <!--Menu Inicio-->
		<div data-role="header">
		<h1><?php echo "Bienvenido $_SESSION[usuario]";?></h1>

		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse">finalizar</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content" id="administrador" data-theme="c">
		<ul data-role="listview" data-inset="true" data-divider-theme="e">
    	<li data-role="list-divider"><h1>Registrar base de Datos</h1></li>
    	<li>
    		<a href="#popupMenu" data-rel="popup" data-role="button" 
    			data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Datos Generales...</a>
				<div data-role="popup" id="popupMenu" data-theme="d">
       	 		<ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Datos Generales</li>
            <li><a href="#datos">Insertar</a></li>
            <li><a href="datos.php">Modificar</a></li>
        	</ul>
				</div>
		</li>

    <li>
    <a href="#popupMenu1" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Clientes...</a>
		<div data-role="popup" id="popupMenu1" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Cliente</li>
            <li><a href="#cliente">Insertar</a></li>
            <li><a href="cliente.php">Modificar</a></li>
        	</ul>
		</div>
    </li>
    <li>
    <a href="#popupMenu2" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Proveedor...</a>
		<div data-role="popup" id="popupMenu2" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Proveedor</li>
            <li><a href="#proveedor">Insertar</a></li>
            <li><a href="proveedor.php">Modificar</a></li>
        	</ul>
		</div>
    </li>

    <li>
    <a href="#popupMenu3" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Empleado...</a>
		<div data-role="popup" id="popupMenu3" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Empleado</li>
            <li><a href="#empleado">Insertar</a></li>
            <li><a href="empleado.php">Modificar</a></li>
        	</ul>
		</div>
    </li>    
    <li>
    <a href="#popupMenu4" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Ventas...</a>
		<div data-role="popup" id="popupMenu4" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Ventas</li>
            <li><a href="#venta">Insertar</a></li>
            <li><a href="venta.php">Modificar</a></li>
        	</ul>
		</div>
    </li>
    <li>
    <a href="#popupMenu5" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Compras...</a>
		<div data-role="popup" id="popupMenu5" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Compras</li>
            <li><a href="#compra">Insertar</a></li>
            <li><a href="compra.php">Modificar</a></li>
        	</ul>
		</div>    
    </li>
    <li>
    <a href="#popupMenu6" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Detalles ventas...</a>
		<div data-role="popup" id="popupMenu6" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Detalle Ventas</li>
            <li><a href="#detalle">Insertar</a></li>
            <li><a href="detalle.php">Modificar</a></li>
        	</ul>
		</div>
    </li>
    <li>
    <a href="#popupMenu7" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Producto y Marca...</a>
		<div data-role="popup" id="popupMenu7" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Productos</li>
            <li><a href="#producto">Insertar</a></li>
            <li><a href="productos.php">Modificar Producto</a></li>
            <li><a href="marca.php">Modificar Marca</a></li>
        	</ul>
		</div>
    </li>
    <li>
    <a href="#popupMenu8" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Estado...</a>
		<div data-role="popup" id="popupMenu8" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Estado, Ciudad, Colonia</li>
            <li><a href="#estado">Insertar</a></li>
            <li><a href="estados.php">Modificar Estado</a></li>
            <li><a href="ciudad.php">Modificar Ciudad</a></li>
            <li><a href="colonia.php">Modificar Colonia</a></li>
        	</ul>
		</div>
    </li>
    <li>
    <a href="#popupMenu9" data-rel="popup" data-role="button" 
    data-inline="true" data-transition="slideup" data-icon="gear" data-theme="d">Direccion...</a>
		<div data-role="popup" id="popupMenu9" data-theme="d">
       	 <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="d">
            <li data-role="divider" data-theme="e">Direccion</li>
            <li><a href="#direccion">Insertar</a></li>
            <li><a href="direccion.php">Modificar</a></li>
        	</ul>
		</div>
    </li>
</ul>
</div><!--Fin COntenido-->

	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--Menu-->

<div data-role="page" id="datos"  data-theme="c"> 
	<div data-role="header">
		<h1>Registro General Personas</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content" data-theme="c">
		<form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Nombre:</label>
          <input type="text" name="nombre" id="basic" value="" required />
    	  <label for="basic">Apellido Paterno:</label>
          <input type="text" name="a_paterno" id="basic" value="" required />
          <label for="basic">Apellido Materno:</label>
          <input type="text" name="a_materno" id="basic" value="" required />
    	  <label for="basic">Sexo:</label>
          <select name="sexo" id="select-choice-a" data-native-menu="false">
           <option>Sexo</option>
           <option value="standard">H</option>
           <option value="rush">M</option>
           </select> 
          <label for="basic">Edad:</label>
          <input type="number" name="edad" id="basic" value="" required />
		   <input type="hidden" name="fn" value="12" />
		  <input type="submit" name="envio" value="Guardar" />
		 </form> 
		 </div><!--Fin COntenido-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div>


<div data-role="page" id="cliente"  data-theme="c" > 
	<div data-role="header">
		<h1>Registro de Clientes</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" 
		data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">

		<form name="formreg" action="insertar.php" method="POST">
	<label for="basic">Referencia Direccion:</label>
	<select name="ref_direccion">


	<?php 
	$consulta="select id,calle from direccion";
		$recordset=mysql_query($consulta);
 			while ($row=mysql_fetch_array($recordset)){
  			echo "<option value=\"$row[id]\">$row[calle]</option>";
	}?>
	</select>

 <label for="basic">Referencia datos:</label>

<select name="ref_datos">
	<?php 
	$consulta2="select id,nombre from datos_generales";
	$recordset2=mysql_query($consulta2);
 		while ($row=mysql_fetch_array($recordset2)){
  		echo "<option value=\"$row[id]\">$row[nombre]</option>";
}?>
</select>



    	  <input type="hidden" name="fn" value="4" >
		  <input type="submit" name="envio" value="Guardar" >
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--/Fin Cliente-->

<div data-role="page" id="proveedor"  data-theme="c" > 
	<div data-role="header">
		<h1>Registro de Proveedor</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" 
		data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Ref_direccion:</label>
          <input type="number" name="ref_direccion" id="basic" value="" required >
    	  <label for="basic">Ref_datos:</label>
          <input type="number" name="ref_datos" id="basic" value="" required >
    	  <input type="hidden" name="fn" value="2" >
		  <input type="submit" name="envio" value="Guardar" >
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--/Fin Cliente-->

<div data-role="page" id="empleado"  data-theme="c" > 
	<div data-role="header">
		<h1>Registro de Empleado</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" 
		data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Ref_direccion:</label>
          <input type="number" name="ref_direccion" id="basic" value="" required >
    	  <label for="basic">Ref_datos:</label>
          <input type="number" name="ref_datos" id="basic" value="" required >
    	  <input type="hidden" name="fn" value="3" >
		  <input type="submit" name="envio" value="Guardar" >
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--/Fin Cliente-->

<div data-role="page" id="producto"> 
	<div data-role="header">
		<h1>Registro de productos</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content"  data-theme="c">
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r"data-expanded-icon="arrow-d">
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Registro Productos</h1>
		<form id="form1" action="insertar.php" method="post">
		<label for="basic">Nombre producto:</label>
		<input type="text" name="nom_producto" placeholder="Nombre producto">
		<label for="basic">Precio:</label>
		<input type="number" name="precio" placeholder="Precio">
		<label for="basic">Cantidad:</label>
		<input type="number" name="cantidad" placeholder="Cantidad">
		<label for="basic">REF marca:</label>
		<input type="number" name="ref_marca" placeholder="RFC marca">
		<label for="basic">REF Proveedor:</label>
		<input type="number" name="ref_proveedor" placeholder="RFC proveedor">
	      <input type="hidden" name="fn" value="11">
		  <input type="submit" name="envio" value="Guardar" data-theme="e">
		</form>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Registro Marca</h1>
		<form id="form1" action="insertar.php" method="post">
		<label for="basic">Nombre Marca:</label>
		<input type="text" name="nom_marca" id="basic" value="" placeholder="Marca">
	      <input type="hidden" name="fn" value="10" >
		  <input type="submit" name="envio" value="Guardar"data-theme="e" >
		</form>
		</div>	
		</div>

	</div><!--Fin COntenido-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div>
<!--Inicio Direccion-->
	<div data-role="page" id="direccion"> 
	<div data-role="header">
		<h1>Registro de Direccion</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value="" required />
    	  <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value="" required />
    	  <label for="basic">Ref_colonia:</label>
    	  <input type="number" name="ref_colonia" id="basic" value="" required />
    	  <input type="hidden" name="fn" value="1">
		  <input type="submit" name="envio" value="Guardar">
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--Fin Direccion-->

<div data-role="page" id="estado"><!--Inicio estado--> 
	<div data-role="header">
		<h1>Registro de Estado...</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content" data-theme="c">
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r"data-expanded-icon="arrow-d">
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Registro Estado</h1>
		<form id="form1" action="insertar.php" method="post">
		<label for="basic"/>Nombre Estado:</label>
		<input type="text" name="nom_estado"placeholder="Nombre del Estado">
	      <input type="hidden" name="fn" value="7" />
		  <input type="submit" name="envio" value="Guardar" data-theme="e"/>
		</form>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Registro Ciudad</h1>

		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Registro Colonia</h1>
		<form id="form1" action="insertar.php" method="post">
		<label for="basic">Nombre Colonia:</label>
		<input type="text" name="nombre_colonia" id="basic" value="" placeholder="Nombre del Estado">
		<label for="basic">REF Ciudad:</label>
		<input type="number" name="ref_ciudad" id="basic" value="" ="Codigo Postal">
	      <input type="hidden" name="fn" value="9" />
		  <input type="submit" name="envio" value="Guardar"data-theme="e" />
		</form>
		</div>	
		</div>

	</div><!--Fin COntenido-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--Fin Estado-->

	<div data-role="page" id="compra"> 
	<div data-role="header">
		<h1>Registro de Compras</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Fecha de la compra:</label>
          <input type="date" name="fecha_compra" id="basic" value="" required />
    	  <label for="basic">Cantidad:</label>
          <input type="number" name="cantidad" id="basic" value="" required />
          <label for="basic">Subtotal:</label>
          <input type="number" name="subtotal" id="basic" value="" required />
          <label for="basic">Total:</label>
          <input type="number" name="total" id="basic" value="" required />
          <label for="basic">Referencia a producto:</label>
          <input type="number" name="ref_producto" id="basic" value="" required />
    	  <input type="hidden" name="fn" value="6" />
		  <input type="submit" name="envio" value="Guardar" />
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div>
	<div data-role="page" id="venta"> <!--Pagina Venta-->
	<div data-role="header">
		<h1>Registro de Ventas</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Fecha de la Venta:</label>
          <input type="date" name="fecha_venta" id="basic" value="" required />
          <label for="basic">Monto:</label>
          <input type="number" name="monto" id="basic" value="" required />
          <label for="basic">Referencia a Cliente:</label>
          <input type="number" name="ref_clientes" id="basic" value="" required />
    	  <input type="hidden" name="fn" value="5" />
		  <input type="submit" name="envio" value="Guardar" />
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--FIn Venta-->

<div data-role="page" id="contacto"  data-theme="c">
	<div data-role="header" data-theme="a" data-position="fixed">
		<a href="#inicio"  data-icon="home" data-rel="back">Inicio</a>
		<h1>Contacto</h1>
		<a href="#" data-transition="Pop" data-icon="grid">Productos</a>
	</div>
<!--/header-->

<!--Contenido-->
	<div data-role="content" data-theme="c">
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r"data-expanded-icon="arrow-d">
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Formulario de Contanctos</h1>
		<form id="form1" action="#" method="post">
		<input type="text" placeholder="Escribe tu Nombre">
		<input type="email" placeholder="Escribe tu Email">
		<select>
		 <option>Comentario</option>
		 <option>Sugerencia</option>
		 <option>Pregunta</option>
		</select>
		<textarea placeholder="Escribe tu Comentario"></textarea>
		<input type="submit" value="Enviar" >
		</form>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Informacion de Contacto</h1>
			<p>Email: egenio.21@gmail.com</p>
			<p>telefono: 953 137 9322</p>
			<p>Direccion: Claudio Cruz #33</p>
			<p>Redes Socilaes</p>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Mapa de Ubicacion</h1>
		</div>	
		</div>
		</div><!--Fin COntenido-->

<!--Pie de Pagina-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--/fin pagnina-->

<!--Inicio Acerca-->
<div data-role="page" id="acerca"  data-theme="c">
<!--header-->
	<div data-role="header" data-theme="a" data-position="fixed">
		<a href="#inicio"  data-icon="home" data-rel="back">Inicio</a>
		<h1>Contacto</h1>
		<a href="#" data-transition="Pop" data-icon="grid">Productos</a>
	</div>
	<div data-role="content" data-theme="c">
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r"data-expanded-icon="arrow-d">
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Vision Empresarial</h1>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Mision Empresarial</h1>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Historia</h1>
			</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Galeria/Multimedia</h1>
			</div>	
			</div>
	</div><!--Fin COntenido-->
			
			<!--Pie de Pagina-->
		<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--/fin pagnina-->