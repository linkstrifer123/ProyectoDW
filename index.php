<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
	<script src="js/validaciones.js"></script>
	<title>Registrar proyecto</title>
</head>
<body>
<section class="jumbotron titulo">
<div class="">
	<h1 class="container">Proyectos de Grado</h1>
</div>
</section>
<nav class="container">
<ul class="nav nav-tabs">
	<li role="presentation"><a href="ver.php"> Ver Proyecto</a></li>
	<li role="presentation" class="active"><a href="index.php">Registrar Proyecto</a></li>
	<li role="presentation"><a href="eliminar.php"> Eliminar Proyecto </a></li>
	<li role="presentation"><a href="consultar.php"> Modificar Proyecto</a></li>
</ul>
</nav>

<div class="container">
<h3 class="text-center">Registrar Proyecto</h3>
<div id="mensaje" class=""></div>

<form name="formulario" class="registrarf" action="formulario2.php" method="post" onsubmit="return validar()">
	<!--<div class="form-group">
	<label for="exampleInputName2"> Identificador del proyecto: </label><input  name="identificador" type="text" class="form-control" placeholder="Ingrese el Id"></input></div>-->

	<div class="form-group">
	<label for="exampleInputName2"> Nombre del proyecto: </label><input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"></input></div>

	<div class="form-group"><label for="exampleInputName2"> Autores del proyecto: </label><input name="autor1" type="text" class="form-control" placeholder="Autor1"></input><input name="autor2" type="text" class="form-control" placeholder="Autor2"></input><input name="autor3" type="text" class="form-control" placeholder="Autor3"></input></div>

	<div class="form-group">
	<label for="exampleInputName2"> Nombre del asesor: </label><input name="asesor" type="text" class="form-control" placeholder="Ingrese el nombre del asesor"></input></div>

	<!--<div class="form-group">
	<label for="exampleInputName2"> Fecha de ingreso: </label><input name="fecha" type="date" class="form-control" ></input></div>-->

	<div class="form-group">
	<label for="exampleInputName2"> Nota recibida: </label><input name="nota" type="text" class="form-control" ></input></div>

	<div class="form-group">
	<label for="exampleInputName2"> Linea de investigacion: </label><input name="lineainvestigacion" type="text" class="form-control" placeholder="Ingrese tema de investigacion"></input></div>
<input type="submit" class="btn btn-primary" value="Registrar">

</div>
</div>
</form>
</div>

<div class="titulopie">
	<footer class="text-center">
		<p><strong>Todos los derechos reservados 2016 - Julio Perez y Laura Conde</strong></p>
	</footer>
</div>
</body>
</html>
