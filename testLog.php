<?php 

    print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['senha']) && !empty($_POST['email']))
    {
        header('Location: log.php');
    }
    else
    {
        
        include_once('config.php');
        $email = $_POST['email'];
        print_r('<br>');
        $senha = $_POST['senha'];

        print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);
    }
    

?>