<?php
$conexion= new mysqli("localhost","root","","db_anuncios");
if (!$conexion) {
	echo "fallo la conexion";
}
?>