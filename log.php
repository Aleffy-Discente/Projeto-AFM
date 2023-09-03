<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AFM</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));

        }
        div
        {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input
        {
            padding: 15px;
            outline: none;
            border: none;
            font-size: 15px;

        }
        .inputSubmit
        {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover
        {
            background-color: deepskyblue;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <a href="home.php">Home</a>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="testLog.php" method="POST">
        <input type="text" name="Email" placeholder="E-mail">
        <br></br>
        <input type="password" name="senha" placeholder="Senha">
        <br></br>
        <input class="inputSubmit" type="submit" name="submit" VALUES="Enviar">
        </form>
    </div>
</body>
</html>