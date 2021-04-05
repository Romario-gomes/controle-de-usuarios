<?php
    require 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>Controle de usuários</title>
    </head>
    <body>
        <div class="container">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
               Sistema de controle de usuários utilizando PHP e Bootstrap
                <button class="close" data-dismiss="alert" >
                    <span aria-hidden="true">&times;</span>   
                </button>
           </div>

            <div class="table-responsive">
                <table border="0" width="100%" class="table table-bordered table-hover col-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM tb_curso";
                            $sql = $pdo->query($sql);

                            if($sql->rowCount() > 0){
                                foreach($sql->fetchAll() as $usuario){
                                    echo '<tr>';
                                    echo '<td>'.$usuario['nome'].'</td>';
                                    echo '<td>'.$usuario['email'].'</td>';
                                    echo '<td><a href="editar.php?id='.$usuario['id'].'" class="btn btn-info">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'" class="btn btn-danger">Excluir</a></td>';
                                    echo '</tr>';
                                }
                            }
                        ?>
                    </tbody> 
                </table>
            </div>
            <a href="adicionar.php" class="btn btn-primary mt-3 mb-3 ">Adicionar Novo Usuário</a>
        </div>
        <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

