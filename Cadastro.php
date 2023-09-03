<?php 

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['senha']);
    
        include_once('config.php');
            
        $Nome = $_POST['nome'];
        $Email = $_POST['email'];
        $Senha = $_POST['senha'];

        $Result = mysqli_query($Conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$Nome', '$Email','$Senha')");
    }
    else 
    {
        echo "";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | AFM</title>
    <style>
        body{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            font-family: Arial, Helvetica, sans-serif;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            border: none;
            background: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;

        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~.labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #date_nac{
            border: white;
            border-radius: 10px;
            padding: 8px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            border: none;
            width: 100%;
            font-size: 15px;
            color: white;
            padding: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="home.php">Home</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo: </label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email: </label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha: </label>
                </div>
                
                <div class="inputBox">
                 
                </div>
                <br></br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>