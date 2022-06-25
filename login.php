<?php
require "cabecalho.php";
require "inc/funcoes_sessao.php";
require "inc/funcoes_usuario.php";

/* Mensagens para os processos de erros no login */
if( isset($_GET['acesso_proibido']) ){
  $feedback = "Usuário não encontrado!";
} elseif( isset($_GET['logout']) ) {
  $feedback = "Você saiu do sistema!";
} elseif( isset($_GET['nao_encontrado']) ) {
  $feedback = "Usuário não encontrado!";
} elseif( isset($_GET['senha_incorreta']) ) {
  $feedback = "A senha está errada!";          
} elseif( isset($_GET['campos_obrigatorios']) ) {
  $feedback = "Você deve preencher todos os campos!";
} else {
  $feedback = "";
}

if(isset($_POST['entrar'])){
    if(empty($_POST['email']) || empty($_POST['senha'])){
      header("location:login.php?campos_obrigatorios");
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $senha = $_POST['senha'];
      $usuario = buscarUsuario($conexao, $email);
      echo "<script>console.log($usuario)</script>";
      
//---------------------------------------------------------------------------------------------------
  
    if($usuario != null){ 
        if(password_verify($senha, $usuario['senha'])){
          login($usuario['id'], $usuario['nome'], $usuario['email'], $usuario['tipo']);
          header("location:admin/area_adm.php");
        } else {
          header("location:login.php?senha_incorreta");
        }
  
      } else {
        header("location:login.php?nao_encontrado");
      }
    }
  }
?>
<main>
    <div class="content">
      <div id="login">
      <form action="" method="post" id="form-login" name="form-login"> 
            <?php echo $feedback ?> 
            <h1>Bem vindo!</h1>
            
            <p> 
              <label for="email">E-mail:</label>
              <input id="nome_login" name="email" type="email" placeholder="Digite seu e-mail"/>
            </p>
            
            <p> 
              <label for="senha">Senha:</label>
              <input id="email_login" name="senha" type="password" placeholder="Digite sua senha" /> 
            </p>
            
            <p> 
              <button class="btn btn-primary btn-lg" name="entrar" type="submit"></button>
            </p>
            
            <p class="link">
              Ainda não tem conta?
              <a href="cadastro.php">Cadastre-se</a>
            </p>
          </form>
        </div>
      </div>
    </main>

</div>
