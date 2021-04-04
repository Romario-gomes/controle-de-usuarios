<?php
    require('config.php');
    
    if(isset($_GET['id']) && empty($_GET['id']) == false ){
        $id = addslashes($_GET['id']);
        $sql = "DELETE FROM tb_curso WHERE id = :id";
        $sql = $pdo->prepare($sql);
    
        $sql->bindValue(':id', $id);
    
        $sql->execute();

        header("Location: index.php");
    }
?>