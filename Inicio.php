<?php 

if(isset($_POST['submit']))
{
    //print_r($_POST['materia']);
    //print_r($_POST['data']);
    //print_r($_POST['descricao']);

    //include_once('config.php');
        
    //$materia = $_POST['materia'];
    //$data = $_POST['data'];
    //$descricao = $_POST['descricao'];

    //$result = mysqli_query($conexa, "INSERT INTO dados(materia, data, descricao) VALUES ('$materia', '$data', '$descricao')");
}

    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Inicio.php');
    }
    $logado = $_SESSION['email'];

    

    //$sql = "SELECT * FROM dados ORDER BY id DESC";

    //$result = $conexa->query($sql);

    //print_r($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagens/Logo massa.png" type="image/x-icon">
    <link href="../Projeto-AFM/Styles/media.css" rel="stylesheet">
    <title>Inicio | AFM</title>
    <style>
        :root
        {
            --primary: #0000ff;
            --secundary: #95989a;
            --text-color: #000;
            --text-secundary: #000;
            --text-tertiary: #5d5d5d;
        }
        @font-face 
        {
            font-family: regular;
            src: url(../Fonts/Poppins/Poppins-Regular.ttf);
        }
        @font-face 
        {
            font-family: medium;
            src: url(../Fonts/Poppins/Poppins-Medium.ttf);
        }
        @font-face 
        {
            font-family: light;
            src: url(../Fonts/Poppins/Poppins-Light.ttf);
        }
        *
        {
            font-family: regular;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
        {
            height: 98vh;  
            background-image: url("Imagens/Logo_Atulizada-removebg-preview.png");
            background-position: left top;
            margin-right: 60px;
            background-repeat: no-repeat;
            background-size: 200px;
            background-color: #F0F2F5;

        }
        #event-description
        {
            
            background-position: center;
            background-size: cover;
            height: 85vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: var(--text-color);    
        }
        #disclaymer h2
        {
            color: #0000ff;
            font-size: 3em;
            margin-bottom: 1em;
        }
        #disclaymer span
        {
            color: #2BE35E;
            margin-bottom: 1em;
        }
        #disclaymer strong
        {
            color: red;
            margin-bottom: 1em;
        }
        #disclaymer .about-event
        {
            color: #000;
            font-family: light;
            font-size: 2em;
            text-transform: uppercase;
            max-width: 350px;
            font-weight: bold;
            margin-bottom: 1em;
        }
        #disclaymer p 
        {
            font-size: 1.2eem;
            margin-bottom: 0.3;
        }
        #disclaymer .event-date
        {
            font-weight: bold;
            color: red;
        }
        #subcription-form
        {
            background-color: white;
            padding: 2em;
            max-width: 22%;
        }
        #subcription-form p 
        {
            font-size: 1.5em;
            color: var(--text-secundary);
            margin-bottom: 1em;
        }
        .form-group
        {
            display: flex;
            flex-direction: column;
            margin-bottom: 0.8em;
        }
        .form-group label
        {
            color: var(--text-tertiary);
            margin-bottom: .3em;
            font-weight: bold;
        }
        .form-group input
        {
            margin-bottom: 10px;
            width: 100%;
            border-radius: 10px;
            padding: 15px;
            background-color:white;
            font-size: 12pt;
            outline: none;
            box-sizing: border-box;
            padding: 6px 8px;
            border-radius: 5px;
            outline: none;
        }
        .btn 
        {
            background-color: var(--primary);
            color: white;
            text-transform: uppercase;
            width: 100%;
            border: none;
            padding: 12px;
            cursor: pointer;
            opacity: 0.8;
        }
        .btn:hover
        {
            opacity: 1;
        }
        a
        {
            margin-top: 30px;
            color: white;
            background-color: red;
            text-decoration: none;
            padding: 5px;
        }
        table
        {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td 
        {
            border: 1px solid black;
        }

        th, td 
        {
            padding: 10px;
            text-align: center;
        } 
        h3
        {
            color: #F0F2F5;
        }
        img
        {
            background-position: center top;
        }
    </style>
    <!-- Código -->
</head>
<body>
    <a href="sair.php">Sair</a>
    <header id="event-description">
        <div id="disclaymer">
            
            <h2>Bem vindo!</h2>
            <p class="about-event">
                Aqui você pode agendar suas atividades
            </p>
            <p>Infelizmente não posso criar outro banco de dados</p>
            <p class="event-date">Esperaremos até que eu descubra um outro banco de dados</p>
        </div>
        <div id="subcription-form">
            <p>Prencha o fórmulario para agendar suas atividades</p>
            <form action="inicio.php" method="POST">
                <div class="form-group">
                    <label for="materia">Matéria</label>
                    <input type="text" name="materia" placeholder="Digite a matéria">
                </div>
                <div class="form-group">
                    <label for="data">Data de entrega</label>
                    <input type="datetime-local" name="data">
                </div>
                <div class="form-group">
                    <label for="descricao">descrição</label>
                    <input type="text" name="descricao" placeholder="Descrição">
                </div>
                <input type="submit" name="submit"class="btn" value="Enviar >">
            </form>
        </div>
    </header>
    <table>
    <tr>
        <th>Matéria</th>
        <th>Data de entrega</th>
        <th>Descrição</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </table>
    <h3>a</h3>
    <h3>a</h3>
    <h3>a</h3>
    <h3>a</h3>
    <h3>a</h3>
    <h3>a</h3>
    <h3>a</h3>
    <h3>a</h3>

    </body>
    </html>