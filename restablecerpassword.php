<?php
	include('conexion.php');
	$password=md5('admin');
	$variable1="insert into usuarios (usuario,password) values('admin','$password')";
	$rs=mysql_query($variable1);
?>