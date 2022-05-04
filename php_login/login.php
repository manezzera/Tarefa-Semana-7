<?php

    session_start();
    require_once "../php_action/login/db_connect_user.php";

    

if(empty($usuario)):
    header ("Location: index.php?error=Usuario necessário");
    exit();

endif;

if(empty($senha)):
    header ("Location: index.php?error=Senha necessária");
    exit();
endif;

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) === 1):
    $row = mysqli_fetch_assoc($result);
    if($row['usuario'] === $usuario && $row['senha'] === $senha):
        echo "Logado!";
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['senha'] = $row['senha'];
        $_SESSION['id'] = $row['id'];
        header("Location: /avaliacaophp.com/projetoInterdisciplinar/php_crud/listar.php?sucesso");
        exit();

    else:
        header("Location: index.php?error= Usuário ou senha inválidos");
        exit();

    endif;

else:
    header("Location: index.php");
    exit();
    
endif;











?>