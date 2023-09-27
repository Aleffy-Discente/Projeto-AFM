<?php 

if(isset($_POST['submit']))
{
    //print_r($_POST['materia']);
    //print_r($_POST['data']);
    //print_r($_POST['descricao']);

    include_once('config2.php');
        
    $materia = $_POST['materia'];
    $data = $_POST['data'];
    $descricao = $_POST['descricao'];

    $result = mysqli_query($conexa, "INSERT INTO agendas(materia, data, descricao) VALUES ('$materia', '$data', '$descricao')");
}

    session_start();
    include_once('config2.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Inicio.php');
    }
    $logado = $_SESSION['email'];

    if(!empty($_GET['search']))
    {
        //echo "Contem";

        $recebe = $_GET['search'];

        $sql = "SELECT * FROM agendas WHERE id LIKE '%$recebe%' or materia LIKE '%$recebe%' or descricao LIKE '%$recebe%'  or data LIKE '%$recebe%' ORDER BY id DESC";
    }
    else
    {
        //echo "Não tem nada";
        
        $sql = "SELECT * FROM agendas ORDER BY id DESC";
    }

    $sql = "SELECT * FROM agendas ORDER BY id DESC";

    $result = $conexa->query($sql);

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
        .btnd
        {
            background-color: #ff0000;
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
        .box-search
        {
            display: flex;
            justify-content: center;
            gap: 1%;
        }
        button
        {
            margin-bottom: 30px;
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
            <p>Aproveite o nosso mais novo agendador de atividades</p>
            <p class="event-date">Espero que goste dessa maravilhosa ideia!</p>
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
                    <input type="date" name="data">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" placeholder="Descrição">
                </div>
                <input type="submit" name="submit"class="btn" value="Enviar >">
            </form>
        </div>
    </header>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Matéria</th>
                <th scope="col">Data de entrega [Ano, Mês, Dia]</th>
                <th scope="col">Descrição</th>
                <th scope="col" >Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['materia']."</td>";
                    echo "<td>".$user_data['data']."</td>";
                    echo "<td>".$user_data['descricao']."</td>";
                    echo "<td>
                        <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                        </svg>
                        </a>
                        <a class='btnd btnd-sm btnd-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16 fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                    </td>";

                }

            ?>
        </tbody>
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
    <script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function(event) {
            if (event.key === "Enter") 
            {
                searchData();
            }
        });

        function searchData()
        {
            window.location = 'Inicio.php?search='+search.value;
        }
    </script>
    </html>