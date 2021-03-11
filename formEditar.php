<?php
include_once "conexao.php";

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);//só aceita se for um numero inteiro
    $consulta = $conectar->query("SELECT * FROM login where id = '$id'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);

    ?>


<form action="editar.php" method="post">
Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"><br>
Login: <input type="text" name="login" value="<?php echo $linha['login']?>" id="login"><br>
<input type="hidden" name="id" value=value="<?php echo $linha['id']?>">
<input type="submit" value="Editar">
</form>