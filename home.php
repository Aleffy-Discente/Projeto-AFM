<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | AFM</title>
    <style>
        body
        {
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: white;
        }
        .box
        {
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
           background-color: rgba(0, 0, 0, 0.6);
           padding: 30px;
           border-radius: 10px;
        }
        a
        {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover
        {
            background-color: dodgerblue;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <h1>Aqui você pode  fazer o login ou cadastrar</h1>
    <h2>Jorge é Corno</h2>
    <div class="box">
        <a href="Cadastro.php">Sign-up</a>
        <a href="log.php">Login</a>
    </div>
</body>
</html>