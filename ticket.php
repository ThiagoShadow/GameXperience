<!DOCTYPE html>
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
    <link href="styleticket.css" rel="stylesheet" type="text/css"/>
</head>
<body class="img-responsive">

    <div class="container" >
        <?php
            include("header.php");
        ?>
        <div class="row">
            <div class="offset-md-2 col-md-8" style="margin-top: 2%;margin-bottom: 2%;">
                <h1> Tickets de Entrada </h1>
            </div>
        </div>
        <div class="row" style="margin-left: 2.5%; margin-right: 2.5%;">
            <p> Ticket Normal:
                O Ticket Normal lhe da acesso para toda a área como visitante.
            </p>
            <br>
            <p> Ticket Premium:
                O Ticket Premium lhe da acesso para a área como Premium.
            </p>
            <br>
            <p> Ticket Cosplay :
                O Ticket Cosplay lhe da o mesmo acesso que o Premium.
            </p>
        </div>
        <form method="get" action="compraTicket.php">
            <div class="row">
                <div class="col-md-12" style="margin-left: 2.5%; margin-right: 2.5%;">
                    <br>
                    <label> Nome: </label>
                    <br>
                    <input type="text" name="nome" required>
                    <br>
                    <label> E-mail: </label>
                    <br>
                    <input type="text" name="email" required>
                    <br>
                    <label> Telefone: </label>
                    <br>
                    <input type="number" name="telefone" required>
                    <br>
                    <label> CPF: </label>
                    <br>
                    <input type="number" name="cpf" required>
                    <br>
                    <label> Ticket: </label>
                    <br>
                    <select name="ticket">
                        <option value="1">Normal</option>
                        <option value="2">Premium</option>
                        <option value="3">Cosplay</option>
                    </select>
                    <br>
                    <label> Método de Pagamento: </label>
                    <br>
                    <select name="pay">
                        <option value="1">Boleto</option>
                        <option value="2">Cartão de Credito</option>
                        <option value="3">Cartão de Debito</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-left: 2.5%; margin-right: 2.5%;">
                <div class="col-md-12">
                    <button class="button" type="submit" name="comprar"> Comprar </button>
                </div>
            </div>
        </form>
        <?php
            include("footer.php");
        ?>
    </div>
</body>
</html>
