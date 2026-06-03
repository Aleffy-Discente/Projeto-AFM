<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/assets/css/style.css">

</head>

<body>

    <div class="container auth-container d-flex justify-content-center align-items-center">

        <div class="card auth-card p-4 col-md-5">

            <div class="text-center mb-4">

                <h1 class="logo-title">Criar Conta</h1>

                <p class="text-muted">Cadastre-se no sistema</p>

            </div>

            <form action="../controllers/AuthController.php?acao=register" method="POST">

                <div class="mb-3">

                    <label>Nome</label>

                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        required>

                </div>

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

                <button class="btn btn-success w-100 btn-custom">Cadastrar</button>

            </form>

            <div class="text-center mt-4">

                <a href="../../public/index.php" class="btn btn-outline-secondary">Voltar ao login</a>

            </div>

        </div>
    </div>

</body>

</html>