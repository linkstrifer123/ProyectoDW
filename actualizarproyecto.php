<?php
 require_once 'formulario.php';
 $fecha = getdate();
 $fechactual = $fecha['year'].'-'.$fecha['mon'].'-'.$fecha['mday'];
 if(($_POST['actnombre'] != "") && ($_POST['actautor1'] != "") && ($_POST['actasesor'] != "") && ($_POST['actnota'] != "") && ($_POST['actlineainvestigacion'] != "") && ($_POST['id'] != "")){
  $pmod = new ProyectoGrado($_POST['actnombre'], $_POST['actautor1'], $_POST['actautor2'], $_POST['actautor3'], $_POST['actasesor'], $fechactual, $_POST['actnota'], $_POST['actlineainvestigacion']);
  $pmod->actualizarformulario($_POST['id'], $_POST['actnombre'], $_POST['actautor1'], $_POST['actautor2'], $_POST['actautor3'], $_POST['actasesor'], $_POST['actnota'], $_POST['actlineainvestigacion']);
  header('Location: ver.php');
 }else{
   header('Location: ver.php');
 }
 ?>
