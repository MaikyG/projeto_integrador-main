<?php
require "../inc/cabecalho-admin.php"; 
require "../inc/funcoes_cursos.php";

$idCurso = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

$curso = lerUmCurso($conexao, $idCurso);

if(isset($_POST['atualizar'])){
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
  $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

  //LÓGICA  DE ATUALIZAÇÃO DA FOTO

  //Se o campo imagem estiver vazio, significa que o usuário não quer trocar de imagem. Ou seja, o sistema vai manter a imagem existente.
  if( empty($_FILES['imagem']['name']) ){
    $imagem = $_POST['imagem-existente'];
  } else {
  //Senão, pegue a referência (nome e extensão) da nova imagem e faça o processo de upload para o servidor
    $imagem = $_FILES['imagem']['name'];
    upload($_FILES['imagem']);
  }
  //Somente depois do processo de upload (se necessário), chamaremos a função atualizaPost
  atualizarPost($conexao, $idCurso, $nome, $descricao, $quantidade, $imagem);

  header("location:cursos_lista.php");
}

?>
       
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Atualizar Curso</h2>

    <form enctype="multipart/form-data"class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar"> 
        
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input value="<?=$curso['nome']?>" class="form-control" type="text" id="nome" name="nome" required>
      </div>
      
      <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricao" id="descricao" cols="50" rows="10" required><?=$curso['descricao']?></textarea>
      </div>
      
      <div class="form-group">
        <label for="quantidade">Quantidade:</label>
        <input value="<?=$curso['quantidade']?>" type="number" name="quantidade" id="quantidade" min="0" max="40" step="1" required>
        </div>
      
      <div class="form-group">
        <label for="imagem-existente">Imagem do curso:</label>
        <input value="<?=$curso['imagem']?>" class="form-control" type="text" id="imagem-existente" name="imagem-existente" readonly>
      </div>            
          
      <div class="form-group">
        <label for="imagem" class="form-label">Caso queira mudar, selecione outra imagem:</label>
        <input class="form-control" type="file" id="imagem" name="imagem"
        accept="image/png, image/jpeg, image/gif, image/svg+xml">
      </div>
        
        <button class="btn btn-primary" name="atualizar">Atualizar curso</button>
    </form>
      
  </article>
</div>

<?php
require "./rodape.php"; 
?>