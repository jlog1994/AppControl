<?php
@session_start();
if (@$_SESSION["name"]) {
	header("Location:index2.php");
	exit();
}	
?>

<!DOCTYPE html>
<html> 
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Autentificación</title>
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
		<h2><a href="http://localhost/App/index.php"><img src="_assets/img/logo.png" alt="jQuery Mobile"></a></h2>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">
	
	<h1>Autentificación del Usuario</h1>
		 <form name="form1"  action="index.php" method="POST">
          <input type="text" name="name"  value="" required />
          <input type="password"  name="password"  value="" required />
		  <input type="hidden" name="fn" value="20" />
		  <input type="submit" value="Autentificación" />
		 </form>
	 	<?php
			@$usuario=$_REQUEST['name'];
			@$password=md5($_REQUEST['password']);
			if (isset($usuario)and isset($password)){
    			require('conexion.php');	
    			$consulta="select * from usuarios where  name='$usuario' and password='$password'";
    			@$rs=mysql_query($consulta);
    			@$rs=mysql_num_rows($rs); 
    			if($rs>0)
    			{	session_start();
    				$_SESSION["name"]= $usuario;
					header("Location:index2.php");
					exit();
				}else {
    				echo '<h3>Cuenta o Password incorrecto</h3>';					
    			}
			}		
		?>
	</div><!-- /content -->
<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
	  <ul class="jqm-list ui-alt-icon ui-nodisc-icon">
		<li data-filtertext="demos homepage" data-icon="home"><a href="home2.html" target="cont">Home</a></li>
		<li data-filtertext="demos homepage" data-icon="user"><a href="user.php" target="cont">Crear cuenta</a></li>
		<li data-filtertext="demos homepage" data-icon="user"><a href="contacto.php" target="cont">Contacto</a></li>
		<iframe width="100%" height="600px" src="home2.html" name="cont" frameborder="0" padding="0px" allowfullscreen></iframe>
	 </ul>
</div><!-- /panel -->

<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>Sistema de Venta  version Demos<span class="jqm-version"></span></p>
		<p>Copyright 2015. Instituto Tecnologico de Tlaxiaco</p>
</div><!-- /footer -->
	
</div>
</body>
</html>