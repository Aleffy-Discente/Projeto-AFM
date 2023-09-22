<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | AFM</title>
    <style>
        body
        {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
        }
        .Box
        {
            color: while;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
    </style>
</head>

<body>
    <h1>Aqui vai estar todas as informações do site</h1>
    <form>
    <fieldset class="Box">
        <legend>Atividade</legend>
        <div class="inputBox">
            <input type="text" placeholder="Matéria" name="nome">
            <label for="nome">Matéria</label>
            <br>
            <div class="inputBox">
            <input type="date" name="data_Cad">
            <label for="nome">Data de Entrega</label>
            <br>
            <div class="inputBox">
            <input type="text" id="nome" name="nome">
            <label for="nome">Nome:</label>
        </div>
    </fieldset>
    </form>
</body>
</html>