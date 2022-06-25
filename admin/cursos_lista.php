<?php
require "../inc/cabecalho-admin.php";
require "../inc/funcoes_cursos.php";
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

$cursos = lerCursos($conexao);
?>
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Cursos</h2>
    <p class="lead text-right">
      <a class="btn btn-primary" href="inserir-curso.php">Inserir novo Curso</a>
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
<?php foreach($cursos as $curso){ 
?>          
            <tr>
            <td> <?=$curso['nome']?> </td>

            <td><?=$curso['quantidade']?> </td>

              <td class="text-center">
              <a class="btn btn-warning btn-sm" 
              href="atualizar-curso.php?id=<?=$curso['id']?>">
                  Atualizar
              </a>
              -
              <a  class="btn btn-danger btn-sm excluir" 
              href="excluir-curso.php?id=<?=$curso['id']?>">
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