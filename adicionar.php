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

<form method="POST">
    Nome:<br>
    <input type="text" name="nome"><br><br>
    Email:<br>
    <input type="text" name="email"><br><br>
    Senha:<br>
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Cadastrar"/>
</form>