<?php
require ('config.php');

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
   
    $sql = "INSERT INTO tb_curso (nome, email, senha) VALUES ( :nome, :email, :senha)";
    
    $sql = $pdo->prepare($sql);

    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);

    $sql = $sql->execute();

    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Cadastrar usuário</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
    </head>
    <body>
        <div class="container">
        <h3 class="text-center">Cadastrar novo usuário</h3>
            <div class="row d-flex justify-content-center ">
                <div class="col-sm-6 m-10 border border-secondary rounded">
                    <form method="POST">
                        <div class="bordered">
                            <div class="form-group">
                                <label class="form-label mt-3" for="nome">Nome:</label> 
                                <input id="nome" type="text" name="nome" class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label class="form-label" for="email">E-mail:</label> 
                                <input id="email" type="text" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="senha">Senha:</label> 
                                <input id="senha" type="password" name="senha" class="form-control"> 
                            </div>
                            <div class="row d-flex justify-content-between">
                            <input type="submit" value="Cadastrar" class="btn btn-success mb-3 mr-3 ml-3"/>
                            <a href="voltar.php" class="btn btn-primary mb-3 mr-3">Voltar</a>
                            
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>  
        </div>
        
        <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>




