	<?php include("conexion.php");?>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	
	
	<h1>Datos del Usuario</h1>
	<form name="formreg" target="cont"action="insertar.php" method="POST">
        <div style="padding:10px 20px;">
            <h3>Registro</h3>
          <label for="basic">Nombre:</label>
          <input type="text" name="name" id="basic"  placeholder="Ingrese su Usuario" value="" required />
    	  <label for="basic">Email:</label>
          <input type="email" name="email" id="basic"  placeholder="Ingrese su Correo" value="" required />
			<label for="pw" >Password:</label>
			<input  id="pw" name="password" data-theme="a" type="password"  required >
            <input type="hidden" name="fn" value="12"/>
            <button type="submit" data-theme="b" data-icon="check">Registrarse</button>
        </div>
    </form>