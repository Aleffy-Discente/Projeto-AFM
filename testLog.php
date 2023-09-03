<?php 

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['senha']) && !empty($_POST['email']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        print_r('Email: ' . $email);
        print_r('Email: ' . $senha);


    }
    else
    {
        header('location: log.php');
    }

?>
Entrou ihihhi