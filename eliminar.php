<?php 
session_start();
include "conexion.php";
$cal=$_REQUEST["id"];
//echo $_SESSION['u_usuario'];
//echo $_SESSION['id'];
$codigo="DELETE FROM avisos where id_avi='$cal'";
$res=$conexion->query($codigo);

if ($res) {
	header("location:sistema.php");
}else{
	echo "no se pudo";
}
?>