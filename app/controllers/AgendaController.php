<?php

require_once __DIR__ .
'/../models/Agenda.php';

session_start();

class AgendaController
{
    private Agenda $agenda;

    public function __construct()
    {
        $this->agenda =
            new Agenda();
    }

    public function criar()
    {
        $titulo =
            trim($_POST['titulo']);

        $descricao =
            trim($_POST['descricao']);

        $data =
            trim($_POST['data']);

        if (
            empty($titulo) ||
            empty($data)
        ) {
            die("Campos obrigatórios.");
        }

        $this->agenda->criar(
            $_SESSION['user_id'],
            $titulo,
            $descricao,
            $data
        );

        header(
            "Location: /Projeto-AFM/app/views/dashboard.php"
        );

        exit;
    }

    public function deletar()
    {
        $id =
            intval($_GET['id']);

        $agenda =
            $this->agenda
            ->buscarPorId($id);

        if (
            !$agenda ||
            $agenda['usuario_id']
            != $_SESSION['user_id']
        ) {
            die("Sem permissão.");
        }

        $this->agenda
            ->deletar($id);

        header(
            "Location: /Projeto-AFM/app/views/dashboard.php"
        );

        exit;
    }

    public function atualizar()
    {
        $id =
            intval($_POST['id']);

        $titulo =
            trim($_POST['titulo']);

        $descricao =
            trim($_POST['descricao']);

        $data =
            trim($_POST['data']);

        $status =
            trim($_POST['status']);

        $agenda =
            $this->agenda
            ->buscarPorId($id);

        if (
            !$agenda ||
            $agenda['usuario_id']
            != $_SESSION['user_id']
        ) {
            die("Sem permissão.");
        }

        $this->agenda
            ->atualizar(
                $id,
                $titulo,
                $descricao,
                $data,
                $status
            );

        header(
            "Location: /Projeto-AFM/app/views/dashboard.php"
        );

        exit;
    }
}

$controller =
new AgendaController();

$acao =
$_GET['acao'] ?? '';

switch ($acao)
{
    case 'criar':
        $controller->criar();
        break;

    case 'deletar':
        $controller->deletar();
        break;

    case 'editar':
        $controller->atualizar();
        break;

    default:
        die("Ação inválida.");
}
?>