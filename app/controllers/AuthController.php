<?php

require_once __DIR__ . '/../models/Usuario.php';

class AuthController
{
    public function login()
    {
        session_start();

        $email =
            trim($_POST['email']);

        $senha =
            trim($_POST['senha']);

        $usuarioModel =
            new Usuario();

        $usuario =
            $usuarioModel
            ->findByEmail($email);

        if (
            !$usuario ||
            !password_verify(
                $senha,
                $usuario['senha']
            )
        ) {

            $_SESSION['erro'] =
                "Email ou senha inválidos.";

            header(
                "Location:
                ../public/index.php"
            );

            exit;
        }

        $_SESSION['user_id'] = $usuario['id'];

        $_SESSION['nome'] = $usuario['nome'];

        header("Location: ../views/dashboard.php");

        exit;
    }

    public function register()
    {
        $nome = trim($_POST['nome']);

        $email = trim($_POST['email']);

        $senha = trim($_POST['senha']);

        if (empty($nome) || empty($email) || empty($senha)) {
            die("Preencha todos os campos.");
        }

        $usuario = new Usuario();
        $emailExiste = $usuario ->findByEmail($email);

        if ($emailExiste) {
            die("Email já cadastrado.");
        }

        $sucesso = $usuario->create(
                $nome,
                $email,
                $senha
            );

        if (!$sucesso) {
            die("Erro ao cadastrar.");
        }

        header("Location: ../public/index.php");

        exit;
    }
}

$controller = new AuthController();

$acao = $_GET['acao'] ?? '';

switch ($acao) {
    case 'login':
        $controller->login();
        break;

    case 'register':
        $controller->register();
        break;

    default:
        die("Ação inválida.");
}
