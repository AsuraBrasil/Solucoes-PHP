<?php

$con = mysqli_connect("localhost","usuario","password","solucoes");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
 
if(mysqli_query($con, "INSERT INTO clientes(`pnome`, `unome`, `telefone`, `email`, `endereco`, `cidade`, `datacriado`) VALUES('".$nome."', '".$sobrenome."', '".$telefone."', '".$email."', '".$endereco."', '".$cidade."', CURRENT_TIMESTAMP())"))
    echo "Cliente cadastrado com sucesso!";
else
    echo "Ocorreu um erro ao cadastrar o cliente. " .  mysqli_errno($con);

//Fecha Conexão com o Banco de Dados
mysqli_close($con);

?>