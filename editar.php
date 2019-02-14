<!DOCTYPE html>
<?php
    include("conexao.php");
    
    $codePessoa = $_GET["codePessoa"];
    $select = "select * from pessoa, stand where codePessoa = '$codePessoa'";
    $resultado = mysqli_query($conexao, $select);
    $row = mysqli_fetch_assoc($resultado);
?>
<html>
<head>
    <title> Games Xperience </title>
    <link rel="shortcut icon" href="Imagens/Logo.png" type="image/ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="stylecadastro.css" rel="stylesheet" type="text/css"/>
</head>
<body class="img-responsive">

    <div class="container" >
        <div class="row">
            <div class="offset-md-0 col-md-12" style="margin-top: 2%;margin-bottom: 2%;">
                <h1> Edição de Colaboradores </h1>
            </div>
        </div>  
        <form method="get" action="inserirEdicao.php">
            <div class="row">
                <div class="col-md-12" style="margin-left: 2.5%; margin-right: 2.5%;">
                    <input type="hidden" name="code" value="<?php echo $row['codePessoa']; ?>">
                    <br>
                    <label> Nome: </label>
                    <br>
                    <input type="text" name="nome" value="<?php echo $row['nomePessoa']; ?>">
                    <br>
                    <label> E-mail: </label>
                    <br>
                    <input type="text" name="email" value="<?php echo $row['emailPessoa']; ?>">
                    <br>
                    <label> Telefone: </label>
                    <br>
                    <input type="number" name="telefone" value="<?php echo $row['telefonePessoa']; ?>">
                    <br>
                    <label> CPF: </label>
                    <br>
                    <input type="number" name="cpf" value="<?php echo $row['cpfPessoa']; ?>">
                    <br>
                    <label> Stand: </label>
                    <br>
                    <select name="stand" value="<?php echo $row['codeStand']; ?>">
                        <option value="1">Games</option>
                        <option value="2">Livros e Variados</option>
                        <option value="3">Tecnologia</option>
                        <option value="4">Youtube</option>
                        <option value="5">Séries</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-left: 2.5%; margin-right: 2.5%;"> 
                <div class="col-md-12">
                    <button class="button" type="submit" value="Cadastrar"> Editar </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>


