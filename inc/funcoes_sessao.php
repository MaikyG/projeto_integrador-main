<?php
if(!isset($_SESSION)){
    session_start();
}

function verificaAcesso(){
    //Se não existe uma variável de sessão relacionada ao id do usuario logado...
    if(!isset($_SESSION['id'])){
        //então significa que ele não está logado, portanto apague qualquer resquício de sessão e force o usuário a ir para o login.php
        session_destroy();
        header("location: ../login.php");
        exit;
    }
}

function login(int $id, string $nome, string $email, string $tipo){
    //criando variáveis de sessao ao logar
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['tipo'] = $tipo;
}

function logout(){
    session_start();
    session_destroy();
    header("location:../login.php");
    die();          
} 

