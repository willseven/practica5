<!DOCTYPE html>
<html>
<head>
	<title>SISTEMA DE ANUNCIOS</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php 
include("conexion.php");
session_start();
if (isset($_SESSION['u_usuario'])) {
	?>

<section>
	<h1>SISTEMA DE ANUNCIOS</h1>
	<?php 
if ($_SESSION['u_usuario']=="admin") {
?>
<b>ADMINISTRADOR DEL SISTEMA</b><br>

<?php
}
 ?>
	<a href="regisestu.php">CREAR ANUNCIO</a>
	<a href="cerrar.php">CERRAR SESION</a>


	<table>
		<thead><tr><th>fecha</th><th class="contenidoe">contenido</th><th>referencia</th><th>categoria</th><th>usuario</th></tr></thead>
		<tbody>
			<?php 
			$consulta="SELECT * FROM avisos inner join 
			categorias on id_cat=id_categoria inner join 
			usuarios on id_us=id_usuario";
			
$resultado=$conexion->query($consulta);
$crecer=1;
while ($row=$resultado->fetch_assoc()) {
	$crecer=$crecer+1;
	?>
<tr><td><?php echo $row['fecha']; ?></td>
<td class="contenidoe" id="cls"><?php echo $row['contenido']; ?></td>
<td><?php echo $row['referencia']; ?></td>
<td><?php echo $row['descripcion']; ?></td>
<td><?php echo $row['usuario']; ?></td>
<?php 
if ($_SESSION['u_usuario']=="admin") {
?>
<td><a href="eliminar.php?id=<?php echo $row['id_avi'];?>">eliminar</a></td>

<?php
}
 ?>
</tr><?php }
			?>
		</tbody>
	</table>
</section>

	<?php
}else{
	header("location:index.php");
}

?>
</body>
</html>
