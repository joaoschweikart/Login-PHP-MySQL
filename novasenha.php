<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESQUECI MINHA SENHA</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="cabecalho">NOVA SENHA</header>
  <main class="conteudos">
    <section class="login">
      <?php
      if(isset($_SESSION['nao-autenticado'])):
      ?>
      <div class="erro">ERRO! O usuário digitado não existe ou as senhas não coincidem</div>
      <div>
      <?php
      endif;
      unset($_SESSION['nao-autenticado']);
      ?>
        <form action="mudarsenha.php" method="post">
          <div class="form">
            <p><label for="email">Usuário: </label><input id="usuario" name="usuario" type="text" placeholder="Usuário"></p>
            <p><label for="senha">Nova senha: </label><input id="novasenha" name="novasenha" type="password" placeholder="Nova senha"></p>
            <p><label for="senha">Confirmar: </label><input id="confirmarsenha" name="confirmarsenha" type="password" placeholder="Confirmar nova senha"></p>
            <button type="submit" class="button">Confirmar</button>
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