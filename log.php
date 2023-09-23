<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    @font-face 
    {
    font-family: regular;
    src: url(Fonts/Poppins/Poppins-Regular.ttf);
    }
    @font-face {
    font-family: light;
    src: url(Fonts/Poppins/Poppins-Light.ttf);
}
    body
    {
        align-items: center;
        justify-content: center;
        display: flex;
        margin: 0;
        background-color: #F0F2F5;
        font-family: regular;
    }
     .main-login
     {
        width: 100vh;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
     }
     .left-login
     {
        width: 50vh;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
       
     }
     .left-login > h1
     {
        font-family: light;
        color: #0000FF;
     }
     .left-login-imagen
    {
        border-radius: 20px;
        width: 68vh;
        background-position: center bottom;
    }
     .right-login
     {
        width: 100vh;
        height: 60vh;
        display: flex;
        justify-content: right;
        align-items: right;
     }
     .card-login
     {
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px 35px;
        background-color: white;
        border-radius: 20px;
     }
     .card-login > h1
     {
        color: #0000FF;
        font-weight: 800;
        margin: 0;
     }
     .textfild
     {
        color: black;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
     }
     .textfild > input
     {
        margin-bottom: 10px;
        width: 100%;
        border-radius: 10px;
        padding: 15px;
        background-color:white;
        font-size: 12pt;
        outline: none;
        box-sizing: border-box;
     }
     .textfild > label
     {
        color: black;
        margin-bottom: 10px;
     }
    .btn-login
    {
        color: white;
        width: 100%;
        margin: 25px;
        padding: 16px 0px;
        border: none;
        border-radius: 8px;
        outline: none;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 3px;
        background-color: #1b74e4;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #00ff8052;
    }
    .senha
    {
        margin-top: -25px;
    }
    .voltar
    {
        margin-top: 30px;
        width: auto;
        text-decoration: none;
        color: white;
        background-color: #42b72a;
        padding: 10px 50px;
        border-radius: 5px;
        border: #0000FF;
    }
    @media only screen and (max-widht: 950px)
    {
        .card-login
        {
            width: 85%;
        }        
    }
    @media only screen and (max-widht:600px)
    {
        .main-login
        {
            flex-direction: column;

        }
    }


    </style>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça o login<br>E veja suas atividades</h1>
            <img src="Mulher.svg" class="left-login-imagen" alt="Mulher-esquecida">
        </div>
        <form class="right-login" action="testLog" method="POST">
            <div class="card-login">
                <div class="textfild">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="textfild">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <input class="btn-login" type="submit" name="submit" VALUES="Enviar">
                <a class="senha" href="a">Esqueceu a senha?</a>
                <a class="voltar" href="home.php">Voltar ao Inicio</a>
            </div>
        </form>
    </div>
    
</body>
</html>