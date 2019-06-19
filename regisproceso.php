<?php 
session_start();
include "conexion.php";
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
if ($usuario!="admin") {
	$query="INSERT INTO usuarios(usuario, password) VALUES ('$usuario','$clave')";
$resultado=$conexion->query($query);
if ($resultado) {
	$que="SELECT*FROM usuarios WHERE usuario='$usuario'";
	$resultado=$conexion->query($que);
	$row=$resultado->fetch_assoc();
	$_SESSION['u_usuario']=$usuario;	
	$_SESSION['id']=$row["id_us"];
	header("location:sistema.php");
}else{
	echo "no se pudo";
}
}else{
	echo "nombre de usuario invalido!";
	header("refresh:2;index.php");
}


?>