<?php

    $dbHot = 'Localhost';
    $dbUsername = 'root';
    $dbSenha = '';
    $dbNome = 'cadastro';

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