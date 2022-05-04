<?php
//sessão 
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM livros WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: /avaliacaophp.com/projetoInterdisciplinar/php_crud/listar.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar";
        header('Location: /avaliacaophp.com/projetoInterdisciplinar/php_crud/listar.php');
    endif;
endif;
