<?php
//sessão 
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $autor = mysqli_escape_string($connect, $_POST['autor']);
    $editora = mysqli_escape_string($connect, $_POST['editora']);
    $paginas = mysqli_escape_string($connect, $_POST['paginas']);
    $genero = mysqli_escape_string($connect, $_POST['genero']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE livros SET titulo = '$titulo', autor = '$autor', editora = '$editora', paginas = '$paginas', genero = '$genero'  WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: /avaliacaophp.com/projetoInterdisciplinar/php_crud/listar.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('Location: /avaliacaophp.com/projetoInterdisciplinar/php_crud/listar.php');
    endif;
endif;
