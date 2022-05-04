<?php
//conexão
include_once '../php_action/crud/db_connect.php';
//header
include_once '../includes/header.php';
//menssage
include_once '../includes/message.php';

//session_start();

if(isset($_SESSION['id']) && isset($_SESSION['usuario']))

?>



<div class="row">
    <div class="col 12 m6 push-m3">
        <h3 class="light"> Livros</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Título:</th>
                    <th>Autor:</th>
                    <th>Editora:</th>
                    <th>Páginas:</th>
                    <th>Gênero:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM livros";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados ['titulo']; ?></td>
                    <td><?php echo $dados ['autor']; ?></td>
                    <td><?php echo $dados ['editora']; ?></td>
                    <td><?php echo $dados ['paginas']; ?></td>
                    <td><?php echo $dados ['genero']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?> " class="btn-floating cyan"> <i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados ['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                        <h4>Opa!</h4>
                        <p>Tem certeza que deseja excluir esse cliente?</p>
                        </div>
                        <div class="modal-footer">
                        

                        <form action="../php_action/crud/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="btn-deletar" class="btn red">Sim, desejo deletar</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>
                        </div>
                    </div>
                </tr>
                <?php 
                endwhile; 
                else: ?>
                
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <?php
                endif;
                ?>


            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Cadastrar Livros</a>
    </div>
</div>


<?php
//footer
include_once '../includes/footer.php';
?>

      