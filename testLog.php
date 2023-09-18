<?php 

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['senha']) && !empty($_POST['email']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        print_r('Email: ' . $email);
        print_r('Email: ' . $senha);

        $sgl = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $Result = $Conexao->query($sql);
        print_r($result);
        print_r($sql);

    }
    else
    {
        header('location: log.php');
    }

?>