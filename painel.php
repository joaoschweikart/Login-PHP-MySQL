<?php
include('verificarlogin.php');
?>
<h2>Olá, <?php echo $_SESSION['usuario'];?>! Seu usuário foi logado/registrado/alterado com sucesso!</h2>
<h2><a href="logout.php">Para fazer log-out, clique aqui.</a></h2>