<?php
require "inc/funcoes_usuario.php";
if(isset($_POST["enviar"])){
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
  $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
  $senha = senhaCodificada($_POST['senha']);

  cadastraUsuario($conexao, $nome, $email, $senha, $tipo);
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <header></header>

    <main>
    <div class="content">
      <div id="login">
          <form method="post" action=""> 
            <h1>Bem vindo!</h1> 
            <p> 
              <label for="nome">Nome:</label>
              <input id="nome" name="nome" required="required" type="text" placeholder="Digite seu nome" /> 
            </p>

            <p> 
              <label for="email">E-mail:</label>
              <input id="email" name="email" required="required" type="text" placeholder="Digite seu e-mail"/>
            </p>

            <p> 
              <label for="senha">Senha:</label>
              <input id="senha" name="senha" required="required" type="password" placeholder="Digite sua senha" /> 
            </p>
            
            <p>
              <label for="tipo">Tipo:</label>
              <select class="custom-select" name="tipo" id="tipo" required>
                <option value=""></option>
                <option value="editor">Aluno</option>
                <option value="admin">Administrador</option>
              </select>
            </p>

            <p> 
              <input type="submit" value="Entrar" name="enviar" /> 
            </p>
          
          </form>
        </div>
      </div>
    </main>

    <footer></footer>

</body>
</html>