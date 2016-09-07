<?php
$parametro = $nome = $_POST['parametro'];
$con = mysqli_connect("localhost","usuario","password","solucoes");


if($parametro)
{
    $result = mysqli_query($con,"SELECT * FROM CLIENTES WHERE pnome LIKE '%"."$parametro"."%' ORDER BY pnome");
}
else
{
    $result = mysqli_query($con,"SELECT * FROM CLIENTES ORDER BY pnome");
}

$linha = mysqli_fetch_assoc($result);
$total = mysqli_num_rows($result);

echo "  <p>
        <table>
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Data Cadastrado</th>
        <th colspan=2>Funções</th>
        <tr>";

if($total)
{
    do{
        echo"<tr>
            <td>".$linha['id']."</td>
            <td>".$linha['pnome']."</td>
            <td>".$linha['unome']."</td>
            <td>".$linha['telefone']."</td>
            <td>".$linha['email']."</td>
            <td>".$linha['endereco']."</td>
            <td>".$linha['cidade']."</td>
            <td>".$linha['datacriado'].'</td>
            <td style="text-align:center;"><a onclick="alterarID('. $linha['id'] . ",'" . $linha['pnome'] . "','" . $linha['unome'] . "','" . $linha['telefone'] . "','" . $linha['email'] . "','" . $linha['endereco'] . "','" . $linha['cidade'] . "'".')" href="#alterar">
            <img src="imgs/edit.png" alt="Alterar" height=32px width=32px></a></td>
            <td style="text-align:center;"><a onclick="deletarID('. $linha['id'].')" href="#deletar" rel="modal:open"> 
            <img src="imgs/delete.png" alt="Excluir" height=32px width=32px></a></td>
            <tr>';

    }while($linha = mysqli_fetch_assoc($result));

    mysqli_free_result($result);
}

echo "</table></p>";

//Fecha Conexão com o Banco de Dados
mysqli_close($con);
?>