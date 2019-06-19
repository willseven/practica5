<?php 
session_start();
include "conexion.php";
$fecha=$_POST["fecha"];
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$referencia=$_POST["referencia"];
$categoria=$_POST["categoria"];
//echo $_SESSION['u_usuario'];
//echo $_SESSION['id'];
$codigo="SELECT * FROM usuarios where usuario='".$_SESSION['u_usuario']."'";
$res=$conexion->query($codigo);
	$row=$res->fetch_assoc();
$query="INSERT INTO avisos(fecha, titulo, contenido,referencia,id_categoria,id_usuario)
VALUES ('$fecha','$titulo','$contenido','$referencia','$categoria','".$_SESSION['id']."')";
$resultado=$conexion->query($query);
if ($resultado) {
	header("location:sistema.php");
}else{
	echo "no se pudo";
}
?>