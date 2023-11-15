<?php

    if(!empty($_GET['id']))
    {
        include_once('config2.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM agendas WHERE id=$id";

        $result = $conexa->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM agendas WHERE id=$id";
            $resultDelete = $conexa->query($sqlDelete);
        }
    }
    header('Location: /Projeto-AFM/Inicio.php');
   
?>