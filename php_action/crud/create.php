<?php
//sessão 
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $autor = mysqli_escape_string($connect, $_POST['autor']);
    $editora = mysqli_escape_string($connect, $_POST['editora']);
    $paginas = mysqli_escape_string($connect, $_POST['paginas']);
    $genero = mysqli_escape_string($connect, $_POST['genero']);

    $sql = "INSERT INTO livros (titulo, autor, editora, paginas, genero) VALUES ('$titulo', '$autor', '$editora', '$paginas', '$genero')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: /avaliacaophp.com/projetoInterdisciplinar/php_crud/listar.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: /avaliacaophp.com/projetoInterdisciplinar/php_crud/listar.php');
    endif;
endif;
