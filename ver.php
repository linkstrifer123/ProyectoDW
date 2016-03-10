<?php
 require_once 'formulario.php';
 $pg = ProyectoGrado::recuperardatos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/validaciones.js"></script>
	<link rel="stylesheet" href="estilos.css">
	<title>Ver proyectos</title>
</head>
<body>
<section class="jumbotron titulo">
<div class="">
	<h1 class="container">Proyectos de Grado</h1>
</div>
</section>
<nav class="container">
<ul class="nav nav-tabs">
	<li role="presentation" class="active"><a href="ver.php"> Ver Proyecto</a></li>
	<li role="presentation" ><a href="index.php">Registrar Proyecto</a></li>
	<li role="presentation"><a href="eliminar.php"> Eliminar Proyecto </a></li>
	<li role="presentation"><a href="consultar.php"> Modificar Proyecto</a></li>
</ul>
</nav>
<div class="container">
<h3 class="text-center">Ver Proyectos</h3>
<br>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<th>Id Proyecto</th>
			<th>Nombre del proyecto</th>
			<th>Autores</th>
			<th>Asesor</th>
			<th>Fecha de Ingreso</th>
			<th>Nota</th>
			<th>Linea de investigacion</th>
		</thead>
		<tr>
      <?php foreach ($pg as $itemdatos): ?>
      <tr><td><?php echo $itemdatos['id'];?></td><td><?php echo $itemdatos['nombre'];?></td><td><?php echo $itemdatos['autor1']; echo $itemdatos['autor2']; echo $itemdatos['autor3'];?></td><td><?php echo $itemdatos['asesor'];?></td><td><?php echo $itemdatos['fecha'];?></td><td><?php echo $itemdatos['nota'];?></td>
      <td><?php echo $itemdatos['investigacion'];?></td></tr>
      <?php endforeach; ?>
		</tr>
	</table>
</div>

</body>
</html>
