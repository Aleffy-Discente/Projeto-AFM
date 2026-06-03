<?php

require_once
'../middleware/auth.php';

require_once
'../models/Agenda.php';

$id =
intval($_GET['id']);

$model =
new Agenda();

$agenda =
$model->buscarPorId($id);

if(
!$agenda
||
$agenda['usuario_id']
!= $_SESSION['user_id']
){
die("Sem permissão.");
}
?>

<form
action="../controllers/AgendaController.php?acao=editar"
method="POST"
>   

<input
type="hidden"
name="id"
value="<?= $agenda['id'] ?>">

<input
type="text"
name="titulo"
value="<?= htmlspecialchars(
$agenda['titulo']
) ?>"
required>

<textarea
name="descricao"
>
<?= htmlspecialchars(
$agenda['descricao']
) ?>
</textarea>

<input
type="date"
name="data"
value="<?= $agenda['data_atividade'] ?>"
required>

<select
name="status"
>

<option
value="pendente">
Pendente
</option>

<option
value="fazendo">
Fazendo
</option>

<option
value="concluido">
Concluído
</option>

</select>

<button>
Salvar alterações
</button>

</form>