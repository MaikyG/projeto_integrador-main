<?php  
require "../inc/cabecalho-admin.php";
require "../inc/funcoes_cursos.php";

if(isset($_POST['inserir'])){
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
  $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_SPECIAL_CHARS);
  $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

  //UPLOAD DE IMAGEM
  if(isset($_FILES['imagem'])) {
    echo "Está setado";
  } 
  $imagem = $_FILES['imagem'];

  //Obtendo e enviando dados
  $imagem = $_FILES['imagem'];

  //Função upload
  upload($imagem);

  //Função inserir post
  inserirCurso($conexao, $nome, $descricao, $resumo, $quantidade, $imagem['name']);

  header("location:cursos_lista.php");
}

?>
  <div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">
      <h2 class="text-center">Inserir curso</h2>

      <form  enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

        <div class="form-group">
          <label for="nome">Nome:</label>
          <input class="form-control" type="text" id="nome" name="nome" >
        </div>

        <div class="form-group">
          <label for="texto">Descrição:</label>
          <textarea class="form-control" name="descricao" id="descricao" cols="50" rows="10"></textarea>
        </div>

        <div class="form-group">
          <label for="texto">Resumo:</label>
          <textarea class="form-control" name="resumo" id="resumo" cols="50" rows="5" maxlength="100"></textarea>
        </div>
        <br>
        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" min="0" max="40" step="1">
        </div>
        <br>
        <div class="form-group">
          <label for="imagem" class="form-label">Selecione a imagem do curso:</label>
          <input required class="form-control" type="file" id="imagem" name="imagem"
          accept="image/png, image/jpeg, image/gif, image/svg+xml">
        </div>
                
        <button class="btn btn-primary"  id="inserir" name="inserir">Inserir curso</button>                
                
      </form>

    </article>
  </div>