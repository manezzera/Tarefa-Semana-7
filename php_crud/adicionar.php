<?php
//header
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col 12 m6 push-m3">
        <h3 class="light"> Novo Livro</h3>
        <form action="../php_action/crud/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="titulo" id="titulo"> 
                <label for="nome">Título</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="autor" id="autor"> 
                <label for="nome">Autor</label> 
            </div>

            <div class="input-field col s12">
                <input type="text" name="editora" id="editora"> 
                <label for="nome">Editora</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="paginas" id="paginas"> 
                <label for="nome">Páginas</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="genero" id="genero"> 
                <label for="nome">Gênero</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
            <a href="listar.php"  type="submit" class="btn green"> Lista dos livros </a>
        </form>
    </div>
</div>


<?php
//footer
include_once '../includes/footer.php';
?>

      