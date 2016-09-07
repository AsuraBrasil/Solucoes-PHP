<?php
$id = $_POST['id'];
$con = mysqli_connect("localhost","usuario","password","solucoes");

if($id)
{
    $result = mysqli_query($con,"SELECT * FROM CLIENTES WHERE id = $id");
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
                <tr>';

        }while($linha = mysqli_fetch_assoc($result));

        mysqli_free_result($result);
    }

    echo "</table></p>";
    echo '<p style="text-align: center;" ><button class="btnDel" onclick="excluiCliente('.$id.')">Sim</button> <button class="btnDel" onclick="fechaModal()">Não</button></p>';

}
else
{
    echo "Um erro ocorreu. Nenhum dado foi recebido. ". $id;
}

//Fecha Conexão com o Banco de Dados
mysqli_close($con);
?>