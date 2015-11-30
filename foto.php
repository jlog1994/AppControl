<?php
 //include("../seguridad2.php");
 require("conexion.php");
 $nc=$_REQUEST['nc'];
 $qry = "SELECT foto  FROM productos WHERE id='".$nc."'";
 //$qry = "SELECT nombref,tipo,foto  FROM alumnos WHERE ncontrol='9962008'"; 
 $res = mysql_query($qry,$conexion); 

 $contenido = mysql_result($res, 0, 'foto'); 

// header("Content-type: $tipo"); 
 //header("Content-Disposition: ; filename=\"$nombre\"");
 //header("Pragma: no-cache"); 
 //header("Expires: 0"); 
 echo  $contenido;
?>