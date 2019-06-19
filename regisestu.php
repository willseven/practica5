<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR ESTUDIANTE</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php 
include("conexion.php");
session_start();
if (isset($_SESSION['u_usuario'])) {
	?>
<section>
	<h1>SISTEMA DE CONTROL DE CALIFICACIONES</h1>
	<h2>REGISTRAR ESTUDIANTE</h2>
	<form action="estudproceso.php" method="POST">
		<input type="date" name="fecha" placeholder="fecha"><br>
		<input type="text" name="titulo" placeholder="titulo"><br>
		<input type="text" name="contenido" placeholder="contenido"><br>
		<input type="text" name="referencia" placeholder="referencia"><br>
		<select name="categoria">
			<option value="1">se busca</option>
			<option value="2">trabajo</option>
			<option value="3">compra o venta</option>
		</select><br>
		<input type="submit" name="publicar" value="publicar">
	</form>
	<a href="sistema.php">volver</a>
</section>

	<?php
}else{
	header("location:index.php");
}

?>
</body>
</html>