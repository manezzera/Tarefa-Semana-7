<?php
//conexão
include_once '../php_action/login/db_connect_user.php';
//header
include_once '../includes/header.php';
?>

<div > 
    <div class="row">
        <div class="col 12 m6 push-m3">
            <h3 class="light"> Fazer Login </h3>
            <form action="php_action/index.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados ['id'];?>">
                <div class="input-field col s12">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario"> 
                    <label for="nome">Usuário</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="senha" id="senha" placeholder="Senha"> 
                    <label for="nome">Senha</label>
                </div>

                <button type="submit" name="btn-login" class="btn green"> Login </button>
            </form>    
        </div>
    </div>
</div>


<?php
//footer
include_once '../includes/footer.php';
?>