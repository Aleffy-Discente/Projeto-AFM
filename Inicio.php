<?php 
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Inicio.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | AFM</title>
    <style>
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
        body
        {
            font-family: regular;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px;

        }
        header
        {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        #title
        {
            flex-direction: column;
            line-height: 10px;
        }
        h1
        {
            font-weight: 200;
        }
        li
        {
            display: inline-block;
            margin: 20px;
        }
        main
        {
            display: flex;
            flex-direction: row;
            margin-top: 50px;
        }
        h2
        {
            margin-top: 15px;
            font-size: 56px;
            font-family: medium;
            line-height: 10px;
        }
        p
        {
            margin-top: 23px;
            margin-bottom: 0px;
            line-height: 23px;
            max-width: 500px;
            font-family: light;
        }
        span
        {
            color: #12B322;
        }
        img
        {
            width: 600px;
        }
        a
        {
            color: #2813ccbb;
        }
        a:hover
        {
            color: #0000FF;
            transition: 0.3s all;
        }
        .cor
        {
            color: #1919FF;
        }
        #butao
        {
            border: 2px solid #0000ff;
            padding: 10px;
            border-radius: 15px;
        }
        #butao:hover
        {
            background-color: #1919FF;
            color: white;
        }
        form
        {
            display: flex;
            flex-direction: column;
            width: 70%;
        }
        form [type="submit"]
        {
            width: 50%;
            height: 50px;
            background-color: #0000B3;
            color: white;
            font-weight: bold;
        }
        form [type="submit"]:hover
        {
            cursor: pointer;
        }
        input
        {
            margin-top: 20px;
            padding: 15px;
            height: 20px;
            border-radius: 20px;
            outline: none;
            font-size: 15px;
        }
        strong
        {
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <div id="title">
            <h1>StudyPlanner</h1>
            <h1><span>AF</span>rica<strong>M</strong></h1>
        </div>
        <ul>
            <a href="a"><li>Inicio</li></a>
            <a href="a"><li>Contato</li></a>
            <a href="a"><li>Sobre</li></a>
            <a href="a"><li>Serviços</li></a>
            <a href="sair.php" id="butao"><li>Log out</li></a>
        </ul>
    </header>
    
    <main>
        <aside>
            <h2 class="cor">Aqui você agenda</h2>
            <h2>as suas atividades</h2>
            <p>
            Bem-vindo à AFricaM, sua solução para agendar atividades de forma simples e eficaz! Estamos aqui para simplificar a gestão do seu tempo, seja no trabalho ou lazer. Na AFricaM, valorizamos seu tempo e tornamos o agendamento uma tarefa fácil. Junte-se a nós e otimize seu dia a dia na AFricaM. Seja bem-vindo!
            </p>
            <div class="box">
            <form action="home.php" method="POST">
                <input type="text" name="materia" placeholder="Matéria" class="inputUser" required>
                <input type="text" name="Descricao" placeholder="Descrição" class="inputUser" required>
                <input type="datetime" name="data" class="inputUser" required>
                <input type="submit" name="submit" id="submit">
            </form>
        </aside>
        <article>
            <img src="https://онлайн.росробот.рф/wp-content/uploads/2023/06/%D0%92%D0%B5%D0%B1-%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B5%D1%80.jpg" alt="mulher-azul">
        </article>
    </main>
</body>
</html>