<?php

    $dbHot = 'Localhost';
    $dbUsername = 'root';
    $dbSenha = 'Aleffy.18';
    $dbNome = 'projetoafm';

    $conexao = new mysqli($dbHot,$dbUsername, $dbSenha,$dbNome);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}

?>