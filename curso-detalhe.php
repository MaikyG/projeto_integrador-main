<?php 
require "cabecalho.php";
require "inc/funcoes_cursos.php";
$idCurso = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$cursos = lerDetalhes($conexao, $idCurso);

?>

<main class="container-fluid" >
	<div class="background">
	<article>
		<div>
		<h2 class="nomeCursoD" ><?=$cursos['nome']?></h2>
		</div>
		<div class="text-center ">
		<img class="imagemCurso img-fluid " src="./oneup/imagem/<?=$cursos['imagem']?>" alt="Imagem de destaque do curso">
		</div>
		</div>
		<h2>Descrição Sobre o Curso</h2>
		<p><?=nl2br($cursos['descricao'])?></p>
		<h2>Resumo Sobre o Curso</h2>
		<p><?=($cursos['resumo'])?></p>
		<h3>Vagas</h3>
		<p> vagas disponíveis <?=$cursos['quantidade']?></p>

		<button class="btn btn-primary" name="inscrever" >Inscrever-se no Curso</button>
	</article>
</main>
<?php require "rodape.php"?>