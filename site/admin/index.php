<?php
require_once "../conexao.php";

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo - Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Usuários Cadastrados</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Data de Cadastro</th>
        <th>Ações</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['data_cadastro'] ?></td>
        <td>
            <a href="alterar.php?id=<?= $row['id'] ?>">Alterar</a> |
            <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Deseja excluir este usuário?')">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
