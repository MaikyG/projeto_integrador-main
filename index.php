<?php
require "inc/funcoes_cursos.php";
require "cabecalho.php";
$cursos = lerTodosOsCursos($conexao);
?>

<main>
    <section id="cta-container" class="margin">
        <img class="img-cta" src="./oneup/imagens-oneup/img-cta.png" alt="">
        <div id="text-cta" class="d-flex flex-column">
            <h1>Venha escolher o melhor curso para você!</h1>
            <p class="pp">Qualifique-se com excelentes cursos e aumente suas chances no mercado de trabalho.</p>
            <div>
                <button class="btn btn-success">Ver Cursos</button>
                <button class="btn btn-outline-light">Fazer Log In</button>
            </div>
        </div>
    </section>

    <article id="star-courses">
        <h1 class="titulo">Cursos em destaque</h1>
        <section id="courses-slider">
            <?php foreach($cursos as $curso) { ?>
            <div class="slide-carousel-item">
                <img src="./imagem/<?=$curso['imagem']?>" class="d-block w-100" alt="...">
                <h1><?=$curso['nome']?></h1>
                <p> <?= $curso['descricao'] ?> </p>
                <p class="link"><a href="cadastro.php">Inscreva-se agora</a></p>
            </div>
            <?php } ?>
        </section>

        <button class="explore-btn btn btn-primary"><a href="cursos.php" id="explore">Explorar Cursos</a></button>

    </article>

    <section id="asks">
        <h2 class="asks-title">Aprenda conosco</h2>
        <p>Aprenda com as ótimas didáticos dos nossos professores nos cursos técnicos. Iremos te ensinar de maneira simples e intuitiva, no teórico e na prática.</p>

        <h2 class="asks-title">Porque escolher a OneUp?</h2>
        <p>Temos muitos cursos técnicos com ótimos professores, para você escolher o curso dos seus sonhos e ingressar profissionalmente no mercado de trabalho com nosso famoso certificado reconhecido pelo MEC</p>

        <h2 class="asks-title">Como me inscrever para um curso?</h2>
        <p>É simples, só se cadastrar, entrar no curso que você tanto deseja fazer, clicar em “Se Matricular”, preenchar os formulários e pronto, só aguardar sua vaga.</p>

    </section>

</main>
    <hr>

<?php
 require "rodape.php"
?>