<?php

    $dbHot = 'Localhost';
    $dbUsername = 'root';
    $dbSenha = '';
    $dbNome = 'cadastros';

    $Conexao = new mysqli($dbHot,$dbUsername, $dbSenha,$dbNome);

    //if($Conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}

?>