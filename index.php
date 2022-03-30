<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="cabecalho">LOGIN</header>
  <main class="conteudos">
    <section class="login">
      <?php
      if(isset($_SESSION['nao-autenticado'])):
      ?>
      <div class="erro">ERRO! E-mail ou Senha estão incorretos</div>
      <div>
      <?php
      endif;
      unset($_SESSION['nao-autenticado']);
      ?>
        <form action="bancodedados.php" method="post">
          <div class="form">
            <p><label for="email">Usuário: </label><input id="usuario" name="usuario" type="text" placeholder="Usuário"></p>
            <p><label for="senha">Senha: </label><input id="senha" name="senha" type="password" placeholder="Senha"></p>
            <button type="submit" class="button">Entrar</button>
          </div>
        </form>
        <div class="options">
          <div><a href="registro.php">Não tem conta? Registre-se aqui.</a></div>
        </div>
      </div>
    </section>
  </main>
  <script src="script.js"></script>
</body>
</html>
