<?php 
require "cabecalho.php";
require "inc/funcoes_cursos.php";
$idCurso = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$cursos = lerDetalhes($conexao, $idCurso);

?>
<div class="row">
	<!-- INÍCIO ROW -->

	<article class="col-12 bg-white rounded shadow my-1 py-4">
		<h2><?=$cursos['nome']?></h2>
		<img src="imagem/<?=$cursos['imagem']?>" alt="Imagem de destaque do curso" class="float-left pr-2 img-fluid">
		<p><?=nl2br($cursos['descricao'])?></p>
		<p><?=$cursos['quantidade']?> vagas disponíveis</p>
	</article>
<?php require "rodape.php"?>