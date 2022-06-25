<?php 
require "cabecalho.php";
require "inc/funcoes_cursos.php";
$idCurso = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$cursos = lerDetalhes($conexao, $idCurso);

?>

<div class="back">
	<article >
		<h2 class=""><?=$cursos['nome']?></h2>
		<img  src="./oneup/imagem/<?=$cursos['imagem']?>" class="rounded img-fluid img-thumbnail " alt="Imagem de destaque do curso" >
	<</div>
		<h3>descrição</h3>
		<p><?=nl2br($cursos['descricao'])?></p>
		<h3>resumo</h3>
		<p><?=($cursos['resumo'])?></p>
		<h3>Vagas</h3>
		<p> vagas disponíveis <?=$cursos['quantidade']?></p>
	</article>
<?php require "rodape.php"?>