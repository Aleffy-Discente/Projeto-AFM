<?php 

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['senha']) && !empty($_POST['email']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: ' . $email);
        //print_r('Email: ' . $senha);

        $sgl = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);
        //print_r($result);
        //print_r($sql);
        if(mysqli_num_rows($result) < 1)
        {
            print_r('Não existe');
        }
        else
        {
            print_r('Existe');
        }

    }
    else
    {
        header('location: log.php');
    }

?>