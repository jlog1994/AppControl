<?php
/*require('seguridad.php');*/
$fn=$_REQUEST['fn'];
switch ($fn) {
	###DATOS DE ACTUALIZACIÓN DE DIRECCION########
case '1': {
	$id=$_REQUEST['nc'];
	$ca=$_REQUEST['calle'];
	$num=$_REQUEST['numero'];
	$refc=$_REQUEST['ref_colonia'];
	    $v="update  direccion set calle='".$ca."', numero='".$num."', 
	    ref_colonia='".$refc."' where id='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:direccionL1.php");exit();
	}
	mysql_close($conexion);
}break;
###DATOS DE ACTUALIZACIÓN DE PROVEEDOR########
case '2': {
	$id=$_REQUEST['nc'];
	$nom=$_REQUEST['nombre'];
	$corr=$_REQUEST['correo'];
	$telef=$_REQUEST['telefono'];
	$red=$_REQUEST['ref_direccion'];
	    $v="update  proveedor set nombre='".$nom."',correo='".$corr."',telefono='".$telef."',ref_direccion='".$red."'
		where id='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:proveedorL1.php");exit();
	}
	mysql_close($conexion);
}break;
case '3': {#Empleado
	$id=$_REQUEST['nc'];
	$nom=$_REQUEST['nombre'];
	$ap=$_REQUEST['apellidos'];
	$fec=$_REQUEST['fechan'];
	$tel=$_REQUEST['telefono'];
	$refd=$_REQUEST['ref_direccion'];
	    $v="update  empleados set nombre='".$nom."',apellidos='".$ap."',fechan='".$fec."', telefono='".$tel."',
	    ref_direccion='".$refd."' where id='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:empleadoL1.php");exit();
	}
	mysql_close($conexion);
}break;
case '4': {####CLiente
	$id=$_REQUEST['nc'];
	$nomb=$_REQUEST['nombre'];
	$ape=$_REQUEST['apellidos'];
	$telef=$_REQUEST['telefono'];
	$refdir=$_REQUEST['ref_direccion'];
	    $v="update  clientes set nombre='".$nomb."', 
	    apellidos='".$ape."',telefono='".$telef."',ref_direccion='".$refdir."' where id='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:clienteL1.php");exit();
	}
	mysql_close($conexion);
}break;
case '5': {
	$id=$_REQUEST['nc'];
	$fev=$_REQUEST['fecha_venta'];
	$mon=$_REQUEST['total'];
	$rec=$_REQUEST['ref_clientes'];
	$refem=$_REQUEST['ref_empleado'];
	    $v="update  ventas set fecha_venta='".$fev."',
	     total='".$mon."',ref_clientes='".$rec."',ref_empleado='".$refem."' where id='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:ventaL1.php");exit();
	}
	mysql_close($conexion);
}break;
case '6': {##PRODUCTO
	$id=$_REQUEST['nc'];
	$fec=$_REQUEST['fecha_compra'];
	$can=$_REQUEST['cantidad'];
	$sub=$_REQUEST['subtotal'];
    $to=$_REQUEST['total'];
    $refp=$_REQUEST['ref_producto'];
	    $v="update  compras set fecha_compra='".$fec."', 
	    cantidad='".$can."',subtotal='".$sub."',total='".$to."',
	    ref_producto='".$refp."' where id='".$id."'";
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
case '7': {##ESTADO
	$id=$_REQUEST['nc'];
	$nome=$_REQUEST['nom_estado'];
	    $v="update  estado set nom_estado='".$nome."' where id='".$id."'";
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
case '8': {##CIUDAD
	$id=$_REQUEST['nc'];
	$nomc=$_REQUEST['nom_ciudad'];
	$codp=$_REQUEST['codigo_postal'];
	$refe=$_REQUEST['ref_estado'];
	    $v="update  ciudad set nom_ciudad='".$nomc."', 
	    codigo_postal='".$codp."',
	    ref_estado='".$refe."' where id='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:ciudadL1.php");exit();
	}
	mysql_close($conexion);
}break;
case '9': {##COLONIA
	$id=$_REQUEST['nc'];
	$nombc=$_REQUEST['nombre_colonia'];
	$refc=$_REQUEST['ref_ciudad'];
	    $v="update  colonia set nombre_colonia='".$nombc."',
	     ref_ciudad='".$refc."' where id='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:coloniaL1.php");exit();  
	}
	mysql_close($conexion);
}break;
case '10': {
	$id=$_REQUEST['nc'];
	$nomm=$_REQUEST['nom_marca'];
	    $v="update  marca set nom_marca='".$nomm."' where id='".$id."'";
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
	$id=$_REQUEST['nc'];
	$nomp=$_REQUEST['nom_producto'];
	$pre=$_REQUEST['precio'];
	$can=$_REQUEST['cantidad'];
	$rem=$_REQUEST['ref_marca'];
	$rep=$_REQUEST['ref_proveedor'];
	    $v="update  productos set nom_producto='".$nomp."', precio='".$pre."',
	    cantidad='".$can."',ref_marca='".$rem."',
	    ref_proveedor='".$rep."' where id='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:productosL1.php");exit();
	}
	mysql_close($conexion);
}break;
case '12': {
	$id=$_REQUEST['nc'];
	$no=$_REQUEST['nombre'];
	$ap=$_REQUEST['a_paterno'];
	$am=$_REQUEST['a_materno'];
	$sex=$_REQUEST['sexo'];
	$ed=$_REQUEST['edad'];
	    $v="update  datos_generales set nombre='".$no."', a_paterno='".$ap."',
	    a_materno='".$am."',sexo='".$sex."',edad='".$ed."' where id='".$id."'";
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