<?php
include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input (INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$dtNascimento = filter_input (INPUT_POST, 'dtNascimento');
$status = filter_input (INPUT_POST, 'status');

$result_cliente = "INSERT INTO cliente (NOME, CPF) VALUES ('THIAGO', '094.216.329-07');";
$Conn = new conexao();
$Conn->conectaDB();
mysqli_query($Conn->conectaDB(), $result_cliente);

$select_cliente = "SELECT * FROM CLIENTE";
mysqli_query($Conn->conectaDB(), $select_cliente);






?>