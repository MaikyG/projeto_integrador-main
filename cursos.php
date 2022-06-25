<?php 
require "cabecalho.php";
require "inc/funcoes_cursos.php";
$cursos = lerTodosOsCursos($conexao);
?>

<main class="container">

<div id="aqui" class="row row-cols-3 row-cols-md-3">
<?php foreach($cursos as $curso){?>
  <div class="col mb-4">
  <div class="card border-dark">
  <div class="tamanho">
    <img src="./imagem/<?=$curso['imagem']?>" class="card-img-top" alt=""><a href="curso-detalhe.php">
    <div class="card-body">
      <h5 class="card-title"><?=$curso['nome']?></h5>
      <p class="card-texte"><?=$curso['descricao']?></p>
      </a>
    </div>
    </div>
    </div>
  </div>

<?php }?>
</div>  
</div>
</main>
<?php require "rodape.php" ?>