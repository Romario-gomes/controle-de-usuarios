<?php
    require 'config.php';
?>
<a href="adicionar.php">Adicionar Novo Usuário</a>
<h1>Esse é o novo branch</h1>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php
        $sql = "SELECT * FROM tb_curso";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $usuario){
                echo '<tr>';
                echo '<td>'.$usuario['nome'].'</td>';
                echo '<td>'.$usuario['email'].'</td>';
                echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                echo '</tr>';
                
            }
        }
    ?>


</table>