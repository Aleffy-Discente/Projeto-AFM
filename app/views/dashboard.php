<?php

require_once
    '../middleware/auth.php';

require_once
    '../models/Agenda.php';

$model = new Agenda();

$agendas = $model->listarPorUsuario($_SESSION['user_id']);

$total = count($agendas);

$concluidas = count(array_filter($agendas,
        fn($a) =>
        $a['status']
            === 'concluido'
    ));

$pendentes = count(array_filter($agendas,
        fn($a) =>
        $a['status']
            === 'pendente'
    ));
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../public/assets/css/style.css">

</head>

<body>

    <nav
        class="navbar navbar-dark bg-dark px-4">

        <h4 class="text-white">AFM Agenda</h4>

        <div>

            <span class="text-white me-3"><?= htmlspecialchars($_SESSION['nome']) ?></span>

            <a href="../../public/logout.php" class="btn btn-danger">Sair</a>

        </div>

    </nav>

    <div class="container mt-5">

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card dashboard-card p-4">
                    <h5>Total</h5>
                    <h2><?= $total ?></h2>
                </div>
            </div>

            <div class="col-md-4">

                <div
                    class="card dashboard-card p-4">

                    <h5>Concluídas</h5>

                    <h2>
                        <?= $concluidas ?>
                    </h2>

                </div>
            </div>

            <div class="col-md-4">

                <div
                    class="card dashboard-card p-4">

                    <h5>Pendentes</h5>

                    <h2>
                        <?= $pendentes ?>
                    </h2>

                </div>
            </div>

        </div>

        <hr class="my-5">

        <div class="table-container">

            <h3 class="mb-4">Nova atividade</h3>

            <form action="../controllers/AgendaController.php?acao=criar" method="POST">

                <div class="row">

                    <div class="col-md-4">

                        <input
                            type="text"
                            name="titulo"
                            placeholder="Título"
                            class="form-control"
                            required>

                    </div>

                    <div class="col-md-4">

                        <input
                            type="date"
                            name="data"
                            class="form-control"
                            required>

                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-success w-100">Salvar</button>
                    </div>

                </div>

                <textarea
                    name="descricao"
                    class="form-control mt-3"
                    placeholder="Descrição">
                </textarea>

            </form>

            <hr>

            <table class="table">

                <thead>

                    <tr>
                        <th>Título</th>
                        <th>Data</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($agendas as $agenda): ?>

                        <tr>

                            <td>
                                <?= htmlspecialchars($agenda['titulo']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($agenda['data_atividade']) ?>
                            </td>

                            <td>

                                <span class="badge bg-primary"> <?= htmlspecialchars($agenda['status']) ?>

                                </span>

                            </td>

                            <td>
                                <a href="editar.php?id=<?= $agenda['id'] ?>" class="btn btn-warning btn-sm">
                                Editar
                                </a>

                                <a href="../controllers/AgendaController.php?acao=deletar&id=<?= $agenda['id'] ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Deseja excluir?')">
                                    Excluir
                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>