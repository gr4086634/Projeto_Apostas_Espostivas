<?php include 'conexao.php'; ?>

<?php
session_start();

// Se não estiver logado → volta para login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$jogo = $_GET['jogo'] ?? '';

// PROCESSAR APOSTA
if (isset($_POST['apostar'])) {

    $valor = $_POST['valor'];
    $telefone = $_POST['telefone'];

    // Criar array de apostas se ainda não existir
    if (!isset($_SESSION['apostas'])) {
        $_SESSION['apostas'] = [];
    }

    $_SESSION['apostas'][] = [
        'usuario' => $_SESSION['usuario'],
        'jogo' => $jogo,
        'valor' => $valor,
        'telefone' => $telefone,
        'data' => date("d/m/Y H:i")
    ];

    header("Location: minhas_apostas.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Processar Aposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">Apostas Esportivas</div>
</header>

<main>
    <section>

        <h1>Confirmar Aposta</h1>
        <p>Jogo selecionado: <strong><?php echo htmlspecialchars($jogo); ?></strong></p>

        <form method="POST">

            <label>Valor da Aposta (R$):</label>
            <input type="number" step="0.01" name="valor" required>

            <label>Telefone:</label>
            <input type="text" name="telefone" required>

            <button type="submit" name="apostar">Finalizar Aposta</button>

        </form>

    </section>
</main>

</body>
</html>
