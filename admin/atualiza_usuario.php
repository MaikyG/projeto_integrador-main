<?php
require "../inc/cabecalho-admin.php"; 
require "../inc/funcoes_usuario.php";

$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

$user = lerUmUsuario($conexao, $idUser);

if(isset($_POST['atualizar'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($_POST['senha'])){
        $senha = $user['senha'];//Manter a senha já existente no banco
    } else{
        /*Caso contrário, se o usuário digitou alguma coisa no campo senha, precisaremos verificar a senha digitada  */
        $senha = verificaSenha($_POST['senha'], $user['senha']);
    }

  atualizarUsuario($conexao, $idUser, $nome, $email, $senha, $tipo);

  header("location:usuarios.php");
}

?>
       
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Atualizar Curso</h2>

    <form enctype="multipart/form-data"class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar"> 
        
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input value="<?=$user['nome']?>" class="form-control" type="text" id="nome" name="nome" required>
    </div>
        
    <div class="form-group">
        <label for="descricao">Email</label>
        <input value="<?=$user['email']?>" class="form-control" type="text" id="email" name="email" required>
    </div>
        
    <div class="form-group">
        <label for="quantidade">Senha</label>
        <input value="" type="text" class="form-control" name="senha" id="quantidade" min="0" max="40" step="1">
    </div>      
    
    <div class="form-group py-3">
        <label for="tipo">Tipo:</label>
        <select class="custom-select" name="tipo" id="tipo" required>
          <option value=""></option>                  
          <option <?php if($user['tipo'] === "admin") echo " selected " ?> value="admin">Administrador</option>     
          <option <?php if($user['tipo'] === "estudante") echo " selected " ?> value="estudante">Estudante</option>
        </select>
      </div>
        
        <button class="btn btn-primary" name="atualizar">Atualizar usuário</button>
    </form>
      
  </article>
</div>