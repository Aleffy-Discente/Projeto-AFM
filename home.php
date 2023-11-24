<?php 

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['senha']);
    
        include_once('Configs/config.php');

        $val = mysqli_query($conexao,'SELECT 1 FROM `usuarios` LIMIT 1');

        if($val === FALSE)
        {
            $sql = "CREATE TABLE 'cadastro'.'usuarios'(
                id INT(6) AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(50),
                email VARCHAR(110),
                senha VARCHAR(45)
                )";

            if ($conexao->query($sql) === TRUE) {
                echo "Table MyGuests created successfully";
            } else {
                echo "Error creating table: " . $conexao->error;
            }
        }
            
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Projeto-AFM/Styles/perfume.css" rel="stylesheet">
    <link href="../Projeto-AFM/Styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" href="Imagens/Logo massa.png" type="image/x-icon">
    <title>Home</title>
    </style>
</head>
<body>
    <header>
        <div id="title">
            <h1>StudyPlanner</h1>
            <h1>AFricaM</h1>
        </div>
        <ul>
            <a href="Imagens/Dormir.svg"><li>Contato</li></a>
            <a href="Imagens/Astronauta.svg"><li>Sobre</li></a>
            <a href="Imagens/Gato.svg"><li>Serviços</li></a>
            <a href="log.php" id="butao"><li>Já tem uma conta?</li></a>
        </ul>
    </header>

    <main>
        <aside>
            <h2 class="cor">Inscreva-se agora</h2>
            <h2>na <span>AF</span>rica<strong>M</strong></h2>
            <p>
            Bem-vindo à AFricaM, sua solução para agendar atividades de forma simples e eficaz! Estamos aqui para simplificar a gestão do seu tempo, seja no trabalho ou lazer. Na AFricaM, valorizamos seu tempo e tornamos o agendamento uma tarefa fácil. Junte-se a nós e otimize seu dia a dia na AFricaM. Seja bem-vindo!
            </p>
            <div class="box">
            <form action="home.php" method="POST">
                <input type="text" name="nome" placeholder="Nome" class="inputUser" required>
                <input type="text" name="email" placeholder="E-mail" class="inputUser" required>
                <input type="password" name="senha" placeholder="Senha" class="inputUser" required>
                <input type="submit" name="submit" id="submit">
            </form>
        </aside>
        <article>
            <img src="Imagens/Flutua.svg" alt="mulher-azul">
        </article>
    </main>
</body>
</html>