<?php
require "conexao.php";

/* inserir curso */

function inserirCurso(mysqli $conexao, string $nome, string $descricao, int $quantidade, string $imagem, string $resumo){
    $sql = "INSERT INTO cursos(nome, descricao, quantidade, imagem, resumo) VALUES('$nome', '$descricao', '$quantidade', '$imagem', '$resumo')";

    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} 

/* função ler cursos */
function lerCursos(mysqli $conexao):array {
    $sql = "SELECT id, nome, descricao, quantidade, imagem, resumo FROM cursos";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $cursos = [];
    while($curso = mysqli_fetch_assoc($resultado)){
        array_push($cursos, $curso);
    }
    return $cursos;
}

// atualizar curso parte 1
function lerUmCurso(mysqli $conexao, int $idCurso):array { 

    $sql = "SELECT nome, descricao, quantidade, resumo, imagem, resumo FROM cursos WHERE id = $idCurso";

	$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado); 
} 

//atualiza curso parte 2
function atualizarPost(mysqli $conexao, int $idCurso, string $nome, string $descricao, int $quantidade, string $imagem, string $resumo){
    $sql = "UPDATE cursos SET nome = '$nome', descricao = '$descricao', quantidade = '$quantidade', resumo = '$resumo', imagem = '$imagem' resumo = '$resumo' WHERE id = $idCurso";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));       
}

//excluir post
function excluirCurso(mysqli $conexao, int $idCurso){   
    $sql = "DELETE FROM cursos WHERE id = $idCurso";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// upload
function upload($arquivo){
    //Definindo os tipos de imagem aceitos
    $tiposValidos = ["image/png", "image/jpeg", "image/gif", "image/svg+xml"];

    //Verificando se o arquivo enviado não é um dos aceitos
    if(!in_array($arquivo['type'], $tiposValidos) ){
        die("<script> alert('Este formato de imagem é inválido!');history.back();</script>");
    }

    //Acessando apenas o nome do arquivo
    $nome = $arquivo['name']; //$_FILES['arquivo']['name']

    //Acessando dados de acesso temporário ao arquivo
    $temporario = $arquivo['tmp_name'];

    //Pasta de destino do arquivo que está sendo enviado
    $destino = "../oneup/imagem/$nome";

    //Se o processo de envio temporario para destino for feito com sucesso, então a fnção retorna verdadeiro (indicando o sucesso do processo)
    if(move_uploaded_file($temporario, $destino) ){
        return true;
    }
}

function lerTodosOsCursos(mysqli $conexao):array {
    $sql = "SELECT id, nome, descricao, quantidade, imagem, resumo FROM cursos";
    
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $cursos = [];
    while( $curso = mysqli_fetch_assoc($resultado) ){
        array_push($cursos, $curso);
    }
    return $cursos; 
} 

function lerDetalhes(mysqli $conexao, int $idCurso):array {    
    $sql = "SELECT cursos.id, cursos.nome, cursos.descricao, cursos.quantidade, cursos.imagem, cursos.resumo FROM cursos WHERE cursos.id = $idCurso";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado); 
}

function busca (mysqli $conexao, string $palavra):array {
    $sql = "SELECT id, nome, descricao, imagem, resumo FROM cursos WHERE nome LIKE '%$palavra%' or descricao LIKE '%$palavra%' or resumo LIKE '%$palavra%' ORDER BY nome DESC";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $cursos = [];
    while ($curso = mysqli_fetch_assoc($resultado)){
        array_push($cursos,$curso);
    }
    return $cursos;
}
