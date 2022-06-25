<?php
require "cabecalho.php"
?>
<main class="container">
        <article>

            <h2>Contato</h2>
    
            <p>Fale conosco mandando um menssagem neste formulario.</p>

            
            <form id="my-form" action="" method="post">
<div class="">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="form-control" placeholder="nome" type="text" name="nome" id="nome" required>
                </div>

                <div class="form-group" >
                    <label for="email">E-mail:</label>
                    <input class="form-control" placeholder="email" type="email" name="" id="email" required>
                </div>
              

                <div class="form-group" >
                    <label for="data">Data de nascimento:</label>
                    <input class="form-control" type="date" name="data" id="data" required>
                </div>

                <div class="form-group ">
                    <label for="telefone">Telefone:</label>
                    <input class="form-control" placeholder="telefone" type="tel" name="telefone" id="telefone">
                </div>

                <div class="form-group ">
                    <label for="idade">Idade:</label>
                    <input class="form-control" placeholder="idade" type="number" name="idade" id="idade" min="18" max="100" required>
                </div>

                <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                <div class="form-group ">
                    <label for="cep">CEP:</label>
                    <input class="form-control" type="text" id="cep" name="cep" maxlength="9" required>
                    <button class="btn btn-primary"  id=localizar-cep">Localizar</button>
                    <b id="status"></b>
                </div>
                <div class="form-group ">
                    <label for="endereco">Endereço:</label>
                    <input class="form-control" type="text" id="endereco" name="endereco" size="30">
                </div>
                <div class="form-group ">
                    <label for="bairro">Bairro:</label>
                    <input class="form-control" type="text" id="bairro" name="bairro">
                </div>
                <div class="form-group ">
                    <label for="cidade">Cidade:</label>
                    <input class="form-control" type="text" id="cidade" name="cidade">
                </div>
                <div class="form-group ">
                    <label for="estado">Estado:</label>
                    <input class="form-control" type="text" id="estado" name="estado">
                </div>
                <!-- /FIM HTML PARA CEP/ENDEREÇO -->

                <div class="form-group">
                    <label for="assunto">Assunto:</label>
                    <select name="" id="">
                        <option></option>
                        <option>Duvida</option>
                        <option>Elogio</option>
                        <option>Reclamações</option>
                        <option>Outros</option>
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem: 
                    </label> <br>
                    <textarea class="form-control"  maxlength="100" placeholder="mensagem" name="mensagem" id="mensagem" cols="20" rows="20"></textarea>
                </div>

                <button class="btn btn-primary" type="submit">Enviar dados</button>
                <p id="my-form-status"></p>
</div>
            </form>

        </article>
    </main>

<?php
require "rodape.php"
?>