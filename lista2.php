<!DOCTYPE html>
<?php
    include("conexao2.php");
    
    $lista2 = "select codePessoa, nomePessoa, emailPessoa, telefonePessoa, cpfPessoa, nomeTicket, tipoPagamento from pessoa, ticket, pagamento where pessoa.codeticket = ticket.codeticket and pessoa.codePagamento = pagamento.codePagamento group by codepessoa;";
    $verificar2 = $conexao2->query($lista2) or die($conexao2->error);
?>
<html>
    <head>
        <title> Listagem </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 style="text-align: center; font-size: 50px;"> Tickets Vendidos </h1>
        <hr>
        <table border="1px" style="margin-left: 20%; width: 60%; margin-right: 20%;">
            <tr>
                <th> Code </th>
                <th> Nome </th>
                <th> E-mail </th>
                <th> Telefone </th>
                <th> CPF </th>
                <th> Ticket </th>
                <th> Pagamento </th>
            </tr>
            <?php
            while ($dado = $verificar2->fetch_array()) {
                ?>
                <tr>
                    <td><?php echo$dado['codePessoa']; ?></td>
                    <td><?php echo$dado['nomePessoa']; ?>  </td>
                    <td><?php echo$dado['emailPessoa']; ?>  </td>
                    <td><?php echo$dado['telefonePessoa']; ?>  </td>
                    <td><?php echo$dado['cpfPessoa']; ?>  </td>
                    <td><?php echo$dado['nomeTicket']; ?>  </td>
                    <td><?php echo$dado['tipoPagamento']; ?> </td>
                </tr>   
                <?php
            }
            ?>
        </table>
        <hr>
        <div>
            <br>
            <a href="index.php" style="text-decoration: none; "><input type="button" style="width: 10%; margin-left: 45%; margin-right: 45%; font-size: 20px;" value="Voltar!"></a>
        </div>
    </body>
</html>
