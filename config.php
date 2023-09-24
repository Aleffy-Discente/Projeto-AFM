<?php

    $dbHot = 'Localhost';
    $dbUsername = 'Aleffy';
    $dbSenha = 'Aleffy';
    $dbNome = 'cadastros';

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