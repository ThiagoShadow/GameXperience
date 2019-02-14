<?php
    include("conexao.php");

    $code = $_GET["codePessoa"];
    $excluir = "DELETE FROM pessoa WHERE codePessoa='$code'";
    $deletar = mysqli_query($conexao, $excluir);

    if (mysqli_affected_rows($conexao)){
        header("Location: lista.php");
    } else{
        echo "Erro!";
    }
?>