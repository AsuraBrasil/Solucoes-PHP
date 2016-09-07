<?php
$id = $_POST['id'];
$con = mysqli_connect("localhost","usuario","password","solucoes");


if($id)
{
    $result = mysqli_query($con,"DELETE FROM CLIENTES WHERE id = $id");
    //$linha = mysqli_fetch_assoc($result);
    //$total = mysqli_num_rows($result);

        if($result)
        {
            echo "Um registro foi excluído com sucesso!";
        }
        else if($total == 0)
        {
            echo "Por um erro, nenhum registro foi excluído";
        }
}
else
{
    echo "Um erro ocorreu. Nenhum registro foi recebido para ser excluido.  ".$id;
}

//Fecha Conexão com o Banco de Dados
mysqli_close($con);
?>