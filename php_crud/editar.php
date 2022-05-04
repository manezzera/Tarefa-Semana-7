<?php
//conexão
include_once '../php_action/crud/db_connect.php';
//header
include_once '../includes/header.php';
//select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM livros  WHERE  id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col 12 m6 push-m3">
        <h3 class="light"> Editar Livro </h3>
        <form action="../php_action/crud/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados ['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo'];?>"> 
                <label for="nome">Título</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="autor" id="autor" value="<?php echo $dados['autor'];?>"> 
                <label for="nome">Autor</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="editora" id="editora" value="<?php echo $dados['editora'];?>"> 
                <label for="nome">Editora</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="paginas" id="paginas" value="<?php echo $dados['paginas'];?>"> 
                <label for="nome">Páginas</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="genero" id="genero" value="<?php echo $dados['genero'];?>"> 
                <label for="nome">Gênero</label>
            </div>

            <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
            <a href="listar.php"  type="submit" class="btn green"> Lista dos Livros </a>
        </form>
    </div>
</div>


<?php
//footer
include_once '../includes/footer.php';
?>

      