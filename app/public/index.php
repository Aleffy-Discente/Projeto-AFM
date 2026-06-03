<?php

require_once '../config/migrate.php';

Migration::run();

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width,
initial-scale=1">

    <title>Login</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="assets/css/style.css">

</head>

<body>

    <div class="container auth-container d-flex justify-content-center align-items-center">

        <div class="card auth-card p-4 col-md-5">

            <div class="text-center mb-4">

                <h1 class="logo-title">AFM Agenda</h1>

                <p class="text-muted">Entre na sua conta</p>

            </div>

            <form action="../app/controllers/AuthController.php?acao=login" method="POST">

                <div class="mb-3">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        required>

                </div>

                <div class="mb-4">

                    <label>Senha</label>

                    <input
                        type="password"
                        name="senha"
                        class="form-control"
                        required>

                </div>

                <button
                    class="btn btn-primary w-100 btn-custom">
                    Entrar
                </button>

            </form>

            <div class="text-center mt-4">

                <p>Não possui conta?</p>

                <a href="../views/cadastro.php" class="btn btn-outline-primary">Criar conta</a>

            </div>

            <?php
            if (isset($_SESSION['erro'])) {
            ?>

                <div
                    class="alert alert-danger mt-3">

                    <?= htmlspecialchars(
                        $_SESSION['erro']
                    ) ?>

                </div>

            <?php
                unset($_SESSION['erro']);
            }
            ?>

        </div>
    </div>

</body>

</html>