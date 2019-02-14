<!DOCTYPE html
<?php
    include("conexao.php");
    
    $lista = "select codePessoa, nomePessoa, emailPessoa, telefonePessoa, cpfPessoa, nomeStand from pessoa, stand where pessoa.codestand = stand.codestand group by codepessoa;";
    $verificar = $conexao->query($lista) or die($conexao->error);
?>
    <html>
<head>
    <title> Listagem </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1 style="text-align: center; font-size: 50px;"> Cadastros </h1>
    <hr>
    <table border="1px" style="margin-left: 20%; width: 60%; margin-right: 20%;">
        <tr>
            <th> Code </th>
            <th> Nome </th>
            <th> E-mail </th>
            <th> Telefone </th>
            <th> CPF </th>
            <th> Stand </th>
            <th colspan="2"> Ação </th>
        </tr>
        <?php
        while ($dado = $verificar->fetch_array()) {
            ?>
            <tr>
                <td><?php echo$dado['codePessoa']; ?></td>
                <td><?php echo$dado['nomePessoa']; ?>  </td>
                <td><?php echo$dado['emailPessoa']; ?>  </td>
                <td><?php echo$dado['telefonePessoa']; ?>  </td>
                <td><?php echo$dado['cpfPessoa']; ?>  </td>
                <td><?php echo$dado['nomeStand']; ?>  </td>
                <td><?php echo "<a href='editar.php?codePessoa=" . $dado['codePessoa'] . "'>Editar</a>"; ?></td>
                <td><?php echo "<a href='excluir.php?codePessoa=" . $dado['codePessoa'] . "'>Excluir</a>"; ?></td>
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