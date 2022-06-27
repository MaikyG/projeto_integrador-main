<?php 
require "cabecalho.php";
?>

<main class="container-fluid">
    <div class="limitM">
        <div class="img-thumbnail rounded mx-auto d-block rounded">
            <div class="backM">
                                <h1 class="text-center perfil ">Perfil</h1>
                            <h2 class=" nomeUsu ">Nome:</h2>
                        <p class="nomeUsu "><<!-- ?=$usuario['nome']? --> ></p>
                    <h2 class="nomeUsu ">Curso:</h2>
                <p class="nomeUsu "><<!-- ?=$usuario['curso']? -->></p>
            </div>
        </div>
    </div>
</main>
   
    
<?php require "rodape.php"?>