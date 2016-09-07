<?php

$con = mysqli_connect("localhost","usuario","password","solucoes");

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
 
if(mysqli_query($con, "UPDATE `clientes` SET `pnome`='".$nome."', `unome`='".$sobrenome."', `telefone`='".$telefone."', `email`='".$email."', `endereco`='".$endereco."', `cidade`='".$cidade."' WHERE `id`=".$id))
    echo "Cliente alterado com sucesso!";
else
    echo "Ocorreu um erro ao alterar o cliente. " .  mysqli_errno($con);

//Fecha Conexão com o Banco de Dados
mysqli_close($con);

?>