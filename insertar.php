<?php
##require('seguridad.php');
$fn=$_REQUEST['fn'];
switch ($fn) {
#DATOS PARA INSERCION#########Direccion
case '1': {
	$ca=$_REQUEST['calle'];
	$nu=$_REQUEST['numero'];
	$rec=$_REQUEST['ref_colonia'];
	$v="insert into direccion(calle,numero,ref_colonia) values('$ca','$nu','$rec')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:direccionL1.php");exit();
	}
	mysql_close($conexion);
} break;
case '2': {#DATOS PARA INSERCION#########proveedor
	$nom=$_REQUEST['Nombre'];
	$cor=$_REQUEST['Correo'];
	$tel=$_REQUEST['telefono'];
	$refdi=$_REQUEST['ref_direccion'];
	
	$v="insert into proveedor(nombre,correo,telefono,ref_direccion) values('$nom','$cor','$tel','$refdi')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:proveedorL1.php");exit();
	}
	mysql_close($conexion);
} break;
case '3': {#DATOS PARA INSERCION#########Empleado
	$no=$_REQUEST['nombre'];
	$ape=$_REQUEST['apellidos'];
	$fna=$_REQUEST['fechan'];
	$te=$_REQUEST['telefono'];
	$refd=$_REQUEST['ref_direccion'];
	$v="insert into empleados (nombre,apellidos,fechan,telefono,ref_direccion) values('$no','$ape','$fna','$te','$refd')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:empleado.php");exit();
	}
	mysql_close($conexion);
} break;
case '4': {#DATOS PARA INSERCION########Cliente
	$nomb=$_REQUEST['nombre'];
	$ape=$_REQUEST['apellidos'];
	$telef=$_REQUEST['telefono'];
	$refdir=$_REQUEST['ref_direccion'];
	$v="insert into clientes (nombre,apellidos,telefono,ref_direccion) values('$nomb','$ape','$telef','$refdir')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:clienteL1.php");exit();
	}
	mysql_close($conexion);
} break;
case '5': {#DATOS PARA INSERCION#########DVentas
	$fev=$_REQUEST['fecha_venta'];
	$mon=$_REQUEST['total'];
	$refc=$_REQUEST['ref_clientes'];
	$refe=$_REQUEST['ref_empleado'];
	$v="insert into ventas (fecha_venta,total,ref_clientes,ref_empleado) values('$fev','$mon','$refc','$refe')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:ventaL1.php");exit();
	}
	mysql_close($conexion);
} break;
case '6': {#DATOS PARA INSERCION#########DCompras
	$fec=$_REQUEST['fecha_compra'];
	$can=$_REQUEST['cantidad'];
	$sub=$_REQUEST['subtotal'];
	$to=$_REQUEST['total'];
	$refp=$_REQUEST['ref_producto'];
	$v="insert into compras (fecha_compra,cantidad,subtotal,total,ref_producto) values('$fec','$can','$sub','$to','$refp')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:compra.php");exit();
	}
	mysql_close($conexion);
} break;
case '7': {#DATOS PARA INSERCION#########Estaado
	$nome=$_REQUEST['nom_estado'];
	$v="insert into estado (nom_estado) values('$nome')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:estados.php");exit();
	}
	mysql_close($conexion);
} break;
case '8': {#DATOS PARA INSERCION#########Ciudad
	$nomc=$_REQUEST['nom_ciudad'];
	$codp=$_REQUEST['codigo_postal'];
	$refe=$_REQUEST['ref_estado'];
	$v="insert into ciudad (nom_ciudad,codigo_postal,ref_estado) values('$nomc','$codp','$refe')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:ciudadL1.php");exit();
	}
	mysql_close($conexion);
} break;
case '9': {#DATOS PARA INSERCION#########Colonia
	$nombc=$_REQUEST['nombre_colonia'];
	$refc=$_REQUEST['ref_ciudad'];
	$v="insert into colonia(nombre_colonia,ref_ciudad) values ('$nombc','$refc')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:coloniaL1.php");exit();
	}
	mysql_close($conexion);
} break;
case '10': {#DATOS PARA INSERCION#########Marca
	$nomm=$_REQUEST['nom_marca'];
	$v="insert into marca (nom_marca) values('$nomm')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:marca.php");exit();
	}
	mysql_close($conexion);
} break;
case '11': {#DATOS PARA INSERCION#########Productos
	$nomp=$_REQUEST['nom_producto'];
	$pre=$_REQUEST['precio'];
	$can=$_REQUEST['cantidad'];
	$rem=$_REQUEST['ref_marca'];
	$rep=$_REQUEST['ref_proveedor'];
	$v="insert into productos (nom_producto,precio,cantidad,ref_marca,ref_proveedor)
	 values('$nomp','$pre','$can','$rem','$rep')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar DATOS GENERALES DEL CLUB U ORGANIZACIÓN DE MIGRANTES";}
	else{					
		header("Location:");exit();
	}
	mysql_close($conexion);
} break;

case '12': {#DATOS PARA INSERCION#########Datos usuarios
	$usu=$_REQUEST['name'];
	$ema=$_REQUEST['email'];
	$pas=$_REQUEST['password'];
	$password=md5($pas);
	$v="insert into usuarios (name,email,password) 
	values('$usu','$ema','$password')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar ";}
	else{					
		header("Location:home.html");exit();
	}
	mysql_close($conexion);
} break;
default:
echo 'NO SE PUDO REALIZAR LA OPERACION';
}	
?>