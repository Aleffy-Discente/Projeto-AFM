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
        width: 55vh;
        background-position: right bottom;
    }
     .right-login
     {
        width: 50vh;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
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
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
     }
     .textfild > input
     {
        width: 100%;
        border-radius: 10px;
        padding: 15px;
        background-color:white;
        color: white;
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
        width: 100%;
        margin: 25px;
        padding: 16px 0px;
        border: none;
        border-radius: 8px;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: #0000BF;
        background: #00ff88;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #00ff8052;
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
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                <div class="textfild">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="textfild">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <input class="btn-login" type="submit" name="submit" VALUES="Enviar">
            </div>
        </div>
    </div>
    
</body>
</html>