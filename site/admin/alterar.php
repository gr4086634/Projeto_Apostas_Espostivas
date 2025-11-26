

<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $update = "UPDATE usuarios SET email='$email' WHERE id=$id";
    $conn->query($update);

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Editar Usuário</h1>

<form method="POST">
    <label>Email:</label>
    <input type="email" name="email" value="<?= $user['email'] ?>" required>

    <button type="submit">Salvar</button>
</form>

</body>
</html>
