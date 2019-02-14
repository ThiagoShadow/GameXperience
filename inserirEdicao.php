<?php
    include("conexao.php");
    
    $code = $_GET["code"];
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"]; 
    $cpf = $_GET["cpf"];
    $stand = $_GET["stand"];

    $f5 = "update pessoa set nomePessoa='$nome',emailPessoa='$email', telefonePessoa='$telefone', cpfPessoa='$cpf', codeStand='$stand' where codePessoa ='$code'";

    $atualizadouf = mysqli_query($conexao, $f5);
    if (mysqli_affected_rows($conexao) != 0) {
        header("Location: lista.php");
    } else {
        echo("<script> alert('Erro!')</script>");
    }
?>