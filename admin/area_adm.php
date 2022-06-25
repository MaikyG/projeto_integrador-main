<?php
require "../inc/cabecalho-admin.php";
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

?>
<br>
<main>
    <div id="admin-options" class="bg-dark mx-5">
        <div id="options-container" class="d-flex justify-content-between align-items-start flex-column p-5">
            <h1 class="hello">Olá, <b><?= $_SESSION['nome'] ?></b></h1>

            <div id="options-group">
                <p>Abas de sessão administrativa.</p>
                <div id="btns-container">
                    <button class="btn btns btn-primary"><a href="cursos_lista.php">Lista de Cursos</a></button>
                    <button class="btn btns btn-primary"><a href="usuarios.php">Usuários</a></button>
                </div>
            </div>
        </div>
    </div>
</main>