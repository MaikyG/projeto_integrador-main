<?php
require "../inc/cabecalho-admin.php";
require "../inc/funcoes_usuario.php";
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

$users = lerUsuarios($conexao);
?>
<div class="row px-5">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Usuários</h2>
    <p class="lead text-right">
      <a class="btn btn-primary" href="inserir-user.php">Inserir novo Usuário</a>
    </p>
            
    <div class="table-responsive"> 

      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th>nome</th>
            <th>vagas</th>
            <th colspan="2" class="text-center">Operações</th>
          </tr>
        </thead>
      
        <tbody>
<?php foreach($users as $user){ 
?>          
            <tr>
            <td> <?=$user['nome']?> </td>

            <td><?=$user["email"]?> </td>

              <td class="text-center">
              <a class="btn btn-warning btn-sm" 
              href="atualiza_usuario.php?id=<?=$user['id']?>">
                  Atualizar
              </a>
              -
              <a  class="btn btn-danger btn-sm excluir" 
              href="excluir-usuario.php?id=<?=$user['id']?>">
                  Excluir
              </a>
            </td>
          </tr>
<?php }?>
        </tbody>                
      </table>
      
    </div>
  </article>
</div>