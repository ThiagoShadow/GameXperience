<?php
    include("conexao.php");

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"]; 
    $cpf = $_GET["cpf"];
    $stand = $_GET["stand"];

    $add = "INSERT INTO pessoa(nomePessoa, emailPessoa, telefonePessoa, cpfPessoa, codeStand) VALUES ('$nome','$email','$telefone','$cpf','$stand')";

    $verificacao = mysqli_query($conexao, $add);
    if (mysqli_affected_rows($conexao) != 0) { 
        echo("<script> alert('Cadastrado com sucesso.')</script>");
        header('Location: cadastro.php');
    } else {
        echo("<script> alert('Deu Ruim!!!')</script>");
    }
?>