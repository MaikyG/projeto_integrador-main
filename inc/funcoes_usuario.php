<?php 
require "conexao.php";

//Inserir usuário
function cadastraUsuario($conexao, string $nome, string $email, string $senha, string $tipo){
    $sql = "INSERT INTO usuarios(nome, email, senha, tipo) VALUES('$nome', '$email', '$senha', '$tipo')";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

//codificar a senha
function senhaCodificada(string $senha):string {
    return password_hash($senha, PASSWORD_DEFAULT);
}

//função ler usuarios
function lerUsuarios(mysqli $conexao){
    $sql = "SELECT id, nome, email, tipo FROM usuarios ORDER BY nome";
    $resultado =  mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $usuarios = [] ;
    while($usuario = mysqli_fetch_assoc($resultado)){ 
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

//função excluir usuario
function excluirUsuario(mysqli $conexao, int $id) {
    $sql = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

//função ler um usuário
function lerUmUsuario(mysqli $conexao, int $id){
    $sql = "SELECT id, nome, email, senha, tipo FROM usuarios WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    return mysqli_fetch_assoc($resultado);
}

//função para verificar senha
function verificaSenha(string $senhaFormulario, string $senhaBanco){
    if(password_verify($senhaFormulario, $senhaBanco)){
        return $senhaBanco; //Mantemos como está (a senhha que já existe)
    } else {
        return senhaCodificada($senhaFormulario);
    }
}

//função atualizar usuario
function atualizarUsuario(mysqli $conexao, int $id, string $nome, string $email, string $senha, string $tipo){
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', tipo = '$tipo' WHERE id = $id";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));    
}

//buscar usuario
function buscarUsuario(mysqli $conexao, string $email) {
    $sql = "SELECT id, nome, email, tipo, senha FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
}