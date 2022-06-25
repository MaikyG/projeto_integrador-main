<?php
require "inc/funcoes_cursos.php";
require "cabecalho.php";

$palavra = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
$resultado = busca($conexao, $palavra);
?>

<main class="container">

<div id="aqui" class="row row-cols-3 row-cols-md-3">
<?php foreach($resultado as $curso){?>
  <div class="col mb-4">
  <div class="card border-dark">
  <a href="curso-detalhe.php">
    <img src="./oneup/imagem/<?=$curso['imagem']?>" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title"><?=$curso['nome']?></h5>
      <p class="card-texte"><?=$curso['descricao']?></p>
      </a>
    </div>
    </div>
  </div>

<?php }?>
</div>  
</div>
</main>

<?php
require "rodape.php"
?>