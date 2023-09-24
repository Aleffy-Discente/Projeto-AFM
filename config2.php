<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Aleffy.18';
    $dbName = 'cadastro';

    $conexa = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
?>