<?php
  session_start();
  include("conexao.php");
  if(empty($_POST['usuario']) or empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
  }
  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $senha = password_hash(mysqli_real_escape_string($conexao, $_POST['senha']), PASSWORD_DEFAULT);
  $sql="INSERT INTO site.users(id, usuario, senha) values (default, '$usuario', '$senha');";
  if(mysqli_query($conexao, $sql)) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
  } else {
    $_SESSION['nao-autenticado'] = true;
    header('Location: registro.php');
    exit();
  }
  mysqli_close($conexao)
?>