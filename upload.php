<?php

function bytesToSize1024($bytes, $precision = 2) {
    $unit = array('B','KB','MB');
    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
}
ob_start();
include("conexion.php");
//session_start();$ncontrol=$_SESSION['ncontrol'];
$nc=$_REQUEST['nc'];
$archivo = $_FILES["image_file"]["tmp_name"]; 
$tamanio = $_FILES["image_file"]["size"];
$tipo    = $_FILES["image_file"]["type"];
$nombre  = $_FILES["image_file"]["name"];

if ($archivo!="none"){
   $fp = fopen($archivo, "rb");
   $contenido = fread($fp, $tamanio);
   $contenido = addslashes($contenido);
   fclose($fp); 
   $sql="update productos set foto='$contenido' where id='".$nc."'";
	$rs=mysql_query($sql,$conexion);
	if(!$rs){
		$error="Error al cargar la Foto..........".mysql_error();header("location:fotoproduc.php?error=$error");
		exit();
	}
}else{
		$error="Seleccione un archivo valido..........";header("location:fotoproduc.php?error=$error");
		exit();
}

ob_end_flush();

echo <<<EOF
<p>Your file: {$nombre} has been successfully received.</p>
<p>Type: {$tipo}</p>
<p>Size: {$tamanio}</p>
<p>La imagen fue cargada con exito</p>
EOF;
