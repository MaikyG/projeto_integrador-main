<?php 
require "cabecalho.php";
require "inc/funcoes_cursos.php";
$cursos = lerTodosOsCursos($conexao);
?>

<div class="row my-1 mx-md-n1">

<?php foreach($cursos as $curso){?>

  <div class="col-md-6 my-1 px-md-1">
    <article class="card shadow-sm h-100">
      <a href="curso-detalhe.php?id=<?=$curso['id']?>" class="card-link">
        <img class="card-img-top" src="imagem/<?=$curso['imagem']?>" alt="Imagem de destaque do curso">
        <div class="card-body">
          <h5 class="card-title"><?=$curso['nome']?></h5>
          <p class="card-text">Ver mais...</p>
          <p><?=$curso['quantidade']?> vagas disponíveis</p>
        </div>
      </a>
    </article>
  </div>
<?php }?>
<?php require "rodape.php" ?>