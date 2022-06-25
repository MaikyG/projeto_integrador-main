<?php
 require "cabecalho.php";
 require "inc/funcoes_cursos.php";

  if(isset($_POST['inserir'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

    //UPLOAD DE IMAGEM
    $imagem = $_FILES['imagem'];

    //Obtendo e enviando dados
    $imagem = $_FILES['imagem'];

    //Função upload
    upload($imagem);

    //Função inserir post
    inserirCurso($conexao, $nome, $descricao, $quantidade, $imagem['name'], $_SESSION['id']);

    header("location:index.php");
}
  ?>
<div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">
      <h2 class="text-center">Inserir curso</h2>

      <!-- adicionar o atributo enctype
    para habilitar o supporte de envio de arquivo via formulario -->
      <form enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

        <div class="form-group">
          <label for="nome">Nome:</label>
          <input required type="text" id="nome" name="nome" >
        </div>

        <div class="form-group">
          <label for="descricao">Descrição:</label>
          <textarea required name="descricao" id="descricao" cols="50" rows="3" maxlength="300"></textarea> 
        </div>
                
        <div class="form-group">
          <label for="imagem" class="form-label">Selecione uma imagem:</label>
          <input required type="file" id="imagem" name="imagem"
          accept="image/png, image/jpeg, image/gif, image/svg+xml">
        </div>
                
        <button  id="inserir" name="inserir">Inserir curso</button>                
                
      </form>

    </article>
  </div>

  <?php require "rodape.php" ?>