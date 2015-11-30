<?php require('seguridad.php'); ?>

<?php
@session_start();
if (!isset($_SESSION['name']))
  die("No esta autorizado a ingresar.");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	
</head>

<body>
<div data-role="page" class="jqm-demos jqm-home">
	<div data-role="header" class="jqm-header">
		<h2><a href="http://localhost/App/index2.php"><img src="_assets/img/logo.png" alt="jQuery Mobile"></a></h2>
		<p><?php echo "Bienvenido $_SESSION[name]";?>
		</p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">
	
	<iframe width="100%" height="1100px" src="home.html" name="cont" frameborder="0" padding="0px" allowfullscreen></iframe>


	</div><!-- /content -->
	
	
	<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
	   <ul class="jqm-list ui-alt-icon ui-nodisc-icon">
		<li data-filtertext="demos homepage" data-icon="home"><a href="home.html" target="cont">Home</a></li>


<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Productos<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="producto.php" target="cont"data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="productosL1.php" target="cont" data-ajax="false">productos</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="busqueda2.php" target="cont" data-ajax="false">Agregar foto</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#"  class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Marca<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="marca.php" target="cont" data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="marcaL1.php"target="cont" data-ajax="false">Marcas</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Empleado<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="empleado.php" target="cont" data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="empleadoL1.php" target="cont" data-ajax="false">Empleados</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Cliente<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="cliente.php" target="cont" data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="clienteL1.php"target="cont" data-ajax="false">Clientes</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Proveedor<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="proveedor.php" target="cont" data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="proveedorL1.php"target="cont" data-ajax="false">Proveedores</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Direccion<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="direccion.php" target="cont" data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="direccionL1.php"target="cont" data-ajax="false">Direcciones</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Venta<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="venta.php" target="cont" data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="ventaL1.php" target="cont" data-ajax="false">Ventas</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Ciudad<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="ciudad.php" target="cont" data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="ciudadL1.php" target="cont"data-ajax="false">Ciudades</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Colonia<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="colonia.php" target="cont" data-ajax="false">Agregar</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="coloniaL1.php" target="cont" data-ajax="false">Colonias</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="demos homepage" data-icon="user"><a href="contacto.php" target="cont">Contacto</a></li>
<li data-filtertext="demos homepage" data-icon="user"><a href="reporte.php" target="cont">Descargar Reporte</a></li>
<li data-filtertext="demos homepage" data-icon="user"><a href="home.html" target="cont">Acerca de..</a></li>
<li data-filtertext="demos homepage" data-icon="user"><a href="home.html" target="cont">Mapa de Ubicacion</a></li>
<li data-filtertext="demos homepage" data-icon="user"><a href="cerrarsesion.php">Cerrar Sesion</a></li>
</ul>

</div><!-- /panel -->

<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>Sistema de Venta  version Demos<span class="jqm-version"></span></p>
		<p>Copyright 2015. Instituto Tecnologico de Tlaxiaco</p>
</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>
