<?php
  require_once 'formulario.php';
  $est = new ProyectoGrado();
  $est->estadoact($_GET['id'], 1);
  header('Location: ver.php');
 ?>
