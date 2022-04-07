<?php
  session_start();
  include("conexao.php");
  if(empty($_POST['usuario']) or empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
  }
  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
  $sql="SELECT * from site.users where usuario = '$usuario' and senha = '$senha';";
  $result= mysqli_query($conexao, $sql);
  $row= mysqli_num_rows($result);
  if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
  } else {
    $_SESSION['nao-autenticado'] = true;
    header('Location: index.php');
    exit();
  }
  mysqli_close($conexao)
?>