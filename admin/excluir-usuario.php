<?php
require "../inc/funcoes_usuario.php";
require "../inc/funcoes_sessao.php";

$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
excluirUsuario($conexao, $id);
header("location:usuarios.php");