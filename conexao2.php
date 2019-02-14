<?php
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $database = "gxp2";
    
    $conexao2 = new mysqli($servername, $username, $password, $database);
        
    if (mysqli_connect_error()){
        echo "Erro";
    }
?>