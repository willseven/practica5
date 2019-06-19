<?php 
include "conexion.php";
session_start();
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$query="SELECT usuario, password from usuarios where
usuario='$usuario' and password='$clave'";
$ver=$conexion->query($query);
$devuelto=mysqli_fetch_array($ver);
if ($devuelto) {

	$que="SELECT*FROM usuarios WHERE usuario='$usuario'";
	$resultado=$conexion->query($que);
	$row=$resultado->fetch_assoc();
	$_SESSION['u_usuario']=$usuario;	
	$_SESSION['id']=$row["id_us"];
	header("location:sistema.php");
}else{
	echo "datos invalidos";
	header("refresh:2;index.php");
}
?>