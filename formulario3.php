<?php
   require_once 'formulario.php';
   $modificar = ProyectoGrado::buscarId($_POST['buscar']);
 if($modificar){?>

   <!DOCTYPE html>
     <html>
       <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="estilos.css">
         <script src="js/validaciones.js"></script>
         <title>Modificar proyecto</title>
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
           <li role="presentation"><a href="eliminar.php"> Eliminar Proyecto </a></li>
           <li role="presentation"><a href="consultar.php" class="active"> Modificar Proyecto</a></li>
         </ul>
         </nav>
         <div class="container">
         <h3 class="text-center">Modificar Proyecto</h3>
         <br>
         <form name="actualizar" class="registrarf" action="actualizarproyecto.php" method="post" onsubmit="return validar()">
           <div class="form-group">
           <input name="id" type="hidden" class="form-control" value="<?php echo $_POST['buscar'];?>" placeholder="Ingrese el Id"></input></div>

           <div class="form-group">
           <label for="exampleInputName2"> Nombre del proyecto: </label><input name="actnombre" type="text" value="<?php echo $modificar->getNameproyec();?>" class="form-control" placeholder="Ingrese el nombre"></input></div>

           <div class="form-group"><label for="exampleInputName2"> Autores del proyecto: </label><input name="actautor1" value="<?php echo $modificar->getAut1();?>" type="text" class="form-control" placeholder="Autor1"></input><input name="actautor2" value="<?php echo $modificar->getAut2();?>" type="text" class="form-control" placeholder="Autor2"></input><input name="actautor3" value="<?php echo $modificar->getAut3();?>" type="text" class="form-control" placeholder="Autor3"></input></div>

           <div class="form-group">
           <label for="exampleInputName2"> Nombre del asesor: </label><input name="actasesor"  value="<?php echo $modificar->getNomasesor();?>" type="text" class="form-control" placeholder="Ingrese el nombre del asesor"></input></div>

           <!--<div class="form-group">
           <label for="exampleInputName2"> Fecha de ingreso: </label><input name="fecha" type="date" class="form-control" ></input></div>-->

           <div class="form-group">
           <label for="exampleInputName2"> Nota recibida: </label><input name="actnota" type="text" value="<?php echo $modificar->getNotaproyec();?>" class="form-control" ></input></div>

           <div class="form-group">
           <label for="exampleInputName2"> Linea de investigacion: </label><input name="actlineainvestigacion" value="<?php echo $modificar->getLineainves();?>" type="text" class="form-control" placeholder="Ingrese tema de investigacion"></input></div>
         <input type="submit" class="btn btn-primary" value="Actualizar">
       </body>
     </html>

 <?php
  }else{
    echo 'No se encuentra el proyecto';
 }
 ?>
