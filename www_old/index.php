<!doctype html>
<html lang="bt-br">
<head>
    <meta charset="UTF-8">
    <title>Class Crud</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>
    <form>
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
        
        <label>CPF: </label>
        <input type="text" name="cpf" placeholder="Digite o CPF"><br><br>

        <label>Data de Nascimento: </label><br><br>
        <input type="text" name="dtNascimento" placeholder="Digite a data de nascimento"><br><br>

        <input type="submit" value="Cadastrar">

    </form>




<?php
    include("www/Class/ClassConexao.php");
    $Conexao = new ClassConexao();
    $Conexao->conectaDB();
?>

</body>
</html>