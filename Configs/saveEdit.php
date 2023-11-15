<?php 

    include_once('config2.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $materia = $_POST['materia'];
        $data = $_POST['data'];
        $descricao = $_POST['descricao'];

        $sqlUpdate = "UPDATE agendas SET materia='$materia',data='$data',descricao='$descricao' WHERE id='$id'";

        $result = $conexa->query($sqlUpdate);
    }
    header('Location: /Projeto-AFM/Inicio.php')

?>