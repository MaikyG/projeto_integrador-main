<?php
require "cabecalho.php"
?>
<main>
        <article class="conteudo limitador">

            <h2>Contato</h2>
    
            <p>Fale conosco mandando um menssagem neste formulario.</p>

            
            <form id="my-form" action="" method="post">

                <div>
                    <label for="nome">Nome:</label>
                    <input placeholder="nome" type="text" name="" id="nome" required>
                </div>

                <div>
                    <label for="email">E-mail:</label>
                    <input placeholder="email" type="email" name="" id="email" required>
                </div>

                <div>
                    <label for="data">Data de nascimento:</label>
                    <input type="date" name="data" id="data" required>
                </div>

                <div>
                    <label for="telefone">Telefone:</label>
                    <input placeholder="telefone" type="tel" name="telefone" id="telefone">
                </div>

                <div>
                    <label for="idade">Idade:</label>
                    <input placeholder="idade" type="number" name="idade" id="idade" min="18" max="100" required>
                </div>

                <div>
                    <p>Sexo:</p>
                    <input value="Masculino" type="radio" name="sexo" id="masculimo">
                    <label for="masculimo">Masculimo</label>

                    <input value="Feminino" type="radio" name="sexo" id="feminino">
                    <label for="feminino">Feminino</label>
                </div>

                <div>
                    <p>Interesses</p>
                    <input value="Desing" type="checkbox" name="interesses" id="desing">
                    <label for="desing">Desing</label>

                    <input value="Robotica" type="checkbox" name="interesses" id="robotica">
                    <label for="robotica">Robotica</label>

                    <input value="Programação" type="checkbox" name="interesses" id="programacao">
                    <label for="programacao">Programação</label>
                </div>

                <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                <div>
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" maxlength="9" required>
                    <button id="localizar-cep">Localizar</button>
                    <b id="status"></b>
                </div>
                <div>
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" size="30">
                </div>
                <div>
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro">
                </div>
                <div>
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade">
                </div>
                <div>
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado">
                </div>
                <!-- /FIM HTML PARA CEP/ENDEREÇO -->

                <div>
                    <label for="assunto">Assunto:</label>
                    <select name="" id="">
                        <option></option>
                        <option>Duvida</option>
                        <option>Elogio</option>
                        <option>Reclamações</option>
                        <option>Outros</option>
                    </select>
                    
                </div>

                <div>
                    <label for="mensagem">Mensagem: 
                        <span id="maximo"> (restam <b id="caracteres">100</b> caracteres)</span>
                    </label> <br>
                    <textarea  maxlength="100" placeholder="mensagem" name="mensagem" id="mensagem" cols="20" rows="5"></textarea>
                </div>

                <button type="submit">Enviar dados</button>
                <p id="my-form-status"></p>

            </form>

        </article>
    </main>

<?php
require "rodape.php"
?>