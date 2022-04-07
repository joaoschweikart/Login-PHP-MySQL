<?php
  session_start();
  include("conexao.php");
  if(empty($_POST['usuario']) or empty($_POST['senha']) or empty($_POST['novasenha'])) {
    header('Location: index.php');
    exit();
  }
  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $novasenha = mysqli_real_escape_string($conexao, $_POST['novasenha']);
  $confirmarsenha = mysqli_real_escape_string($conexao, $_POST['confirmarsenha']);
  if ($novasenha == $confirmarsenha) {
    $sql1="UPDATE site.users SET senha = '$novasenha' WHERE usuario = '$usuario';";
    mysqli_query($conexao, $sql1);
    $sql2="SELECT * from site.users where usuario = '$usuario' and senha = '$novasenha';";
    $row= mysqli_num_rows(mysqli_query($conexao, $sql2));
    if($row == 1) {
      $_SESSION['usuario'] = $usuario;
      header('Location: painel.php');
      exit();
    } else {
      $_SESSION['nao-autenticado'] = true;
      header('Location: novasenha.php');
      exit();
    }
  } else {
    $_SESSION['nao-autenticado'] = true;
      header('Location: novasenha.php');
      exit();
  }
  mysqli_close($conexao)
?>