<?php
require_once 'formulario.php';
 $fech = getdate();
 $fechactual = $fech['year'].'-'.$fech['mon'].'-'.$fech['mday'];
 if(($_POST['nombre'] != "") && ($_POST['autor1'] != "") && ($_POST['asesor'] != "") && ($_POST['nota'] != "") && ($_POST['lineainvestigacion'] != "")){
  $grado = new ProyectoGrado($_POST['nombre'], $_POST['autor1'], $_POST['autor2'], $_POST['autor3'], $_POST['asesor'], $fechactual, $_POST['nota'], $_POST['lineainvestigacion']);
  $grado->guardardatos();
  header('Location: index.php');
 }else{
   header('Location: index.php');
 }
?>
