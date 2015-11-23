<?php
/*require('seguridad.php');*/
$fn=$_REQUEST['fn'];
switch ($fn) {
	###DATOS DE ACTUALIZACIÓN DE DIRECCION########
case '1': {
	$nc=$_REQUEST['nc'];	
    $v="delete from direccion where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:direccion.php");exit();
	}
	mysql_close($conexion);
}break;
case '2': {
	$nc=$_REQUEST['nc'];	
    $v="delete from proveedor where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:proveedor.php");exit();
	}
	mysql_close($conexion);
}break;
case '3': {
	$nc=$_REQUEST['nc'];	
    $v="delete from empleados where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:empleado.php");exit();
	}
	mysql_close($conexion);
}break;
case '4': {
	$nc=$_REQUEST['nc'];	
    $v="delete from clientes where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:cliente.php");exit();
	}
	mysql_close($conexion);
}break;
case '5': {
	$nc=$_REQUEST['nc'];	
    $v="delete from ventas where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:venta.php");exit();
	}
	mysql_close($conexion);
}break;
case '6': {
	$nc=$_REQUEST['nc'];	
    $v="delete from compras where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:compra.php");exit();
	}
	mysql_close($conexion);
}break;
case '7': {
	$nc=$_REQUEST['nc'];	
    $v="delete from estado where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:estados.php");exit();
	}
	mysql_close($conexion);
}break;
case '8': {
	$nc=$_REQUEST['nc'];	
    $v="delete from ciudad where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:ciudad.php");exit();
	}
	mysql_close($conexion);
}break;
case '9': {
	$nc=$_REQUEST['nc'];	
    $v="delete from colonia where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:colonia.php");exit();
	}
	mysql_close($conexion);
}break;
case '10': {
	$nc=$_REQUEST['nc'];	
    $v="delete from marca where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:marca.php");exit();
	}
	mysql_close($conexion);
}break;
case '11': {
	$nc=$_REQUEST['nc'];	
    $v="delete from productos where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:productos.php");exit();
	}
	mysql_close($conexion);
}break;
case '12': {
	$nc=$_REQUEST['nc'];	
    $v="delete from datos_generales where id='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:datos.php");exit();
	}
	mysql_close($conexion);
}break;
}
?>