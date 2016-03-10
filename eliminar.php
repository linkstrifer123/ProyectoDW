<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
	<script src="js/validaciones.js"></script>
	<title>Elimininar proyectos</title>
</head>
<body>
<section class="jumbotron titulo">
<div class="">
	<h1 class="container">Proyectos de Grado</h1>
</div>
</section>
<nav class="container">
<ul class="nav nav-tabs">
	<li role="presentation" ><a href="ver.php"> Ver Proyecto</a></li>
	<li role="presentation" ><a href="index.php">Registrar Proyecto</a></li>
	<li role="presentation" class="active"><a href="eliminar.php"> Eliminar Proyecto </a></li>
	<li role="presentation"><a href="consultar.php"> Modificar Proyecto</a></li>
</ul>
</nav>
<div class="container">
<h3 class="text-center">Eliminar Proyectos</h3>
<br>
<form action="eliminarproyecto.php" method="post">
	<div class="form-group"><label for="exampleInputName2" id="eliminar">Buscar Proyecto</label><input name="buscar" type="text" id="eliminar" class="form-control" placeholder="Ingrese el id del proyecto"></div>
	<br><input type="submit" class="btn btn-primary" value="Buscar Proyecto" id="eliminar">
</form>
</div>

</body>
</html>
