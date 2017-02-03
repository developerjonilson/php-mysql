<?php
  session_start();

  if (isset($_GET['nome'])) {
    $_SESSION['lista_tarefas'][] = $_GET['nome'];
  }

  $lista_tarefas = array();

  if (isset($_SESSION['lista_tarefas'])) {
    $lista_tarefas = $_SESSION['lista_tarefas'];
  }

  include 'template.php';

 ?>
