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
         <title>Eliminar proyecto</title>
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
         <h3 class="text-center">Eliminar Proyecto</h3>
         <table class="table table-bordered table-hover table-condensed">
           <thead>
             <th>Id</th>
             <th>Nombre del proyecto</th>
             <th>Autores</th>
             <th>Asesor</th>
             <th>Nota</th>
             <th>Linea de investigacion</th>
           </thead>
           <tr>
            <td><?php echo $_POST['buscar'];?></td></td><td><?php echo $modificar->getNameproyec();?></td><td><?php echo $modificar->getAut1(); echo $modificar->getAut2(); echo $modificar->getAut3();?></td><td><?php echo $modificar->getNomasesor();?></td><td><?php echo $modificar->getNotaproyec();?></td>
             <td><?php echo $modificar->getLineainves();?></td></tr>
           </tr>
         </table>
         <a href='estado.php? id=<?php echo $_POST['buscar']; ?>'><button type="button" class="btn btn-primary" name="button">Eliminar</button></a>
       </body>
     </html>

 <?php
  }else{
    echo 'No se encuentra el proyecto';
 }
 ?>
