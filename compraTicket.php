<?php
    include("conexao2.php");

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"]; 
    $cpf = $_GET["cpf"];
    $ticket = $_GET["ticket"];
    $pay = $_GET["pay"];
        
    $add2 = "INSERT INTO pessoa(nomePessoa, emailPessoa, telefonePessoa, cpfPessoa, codeTicket, codePagamento) VALUES ('$nome','$email','$telefone','$cpf','$ticket','$pay')";

    $verificacao = mysqli_query($conexao2, $add2);
    if (mysqli_affected_rows($conexao2) != 0) {
        header('Location: ticket.php');
    } else {
        echo("<script> alert('Deu Ruim!!!')</script>");
    }
?>