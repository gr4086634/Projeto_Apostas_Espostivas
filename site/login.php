<?php include 'conexao.php'; ?>

<?php 
session_start();


// SE JÁ ESTIVER LOGADO, REDIRECIONA
if (isset($_SESSION['usuario'])) {
    $jogo = $_GET['jogo'] ?? '';
    header("Location: processar_aposta.php?jogo=$jogo");
    exit;
}

// LOGIN
if (isset($_POST['login'])) {
    $gmail = $_POST['gmail'];
    $senha = $_POST['senha'];

    // Simples validação usando sessão (depois colocaremos banco de dados)
    if (isset($_SESSION['usuarios'][$gmail]) && $_SESSION['usuarios'][$gmail] == $senha) {
        $_SESSION['usuario'] = $gmail;

        $jogo = $_GET['jogo'] ?? '';
        header("Location: processar_aposta.php?jogo=$jogo");
        exit;
    } else {
        $erro = "Gmail ou senha incorretos!";
    }
}

// CADASTRO
if (isset($_POST['cadastrar'])) {
    $gmail = $_POST['gmail'];
    $senha = $_POST['senha'];

    if (!isset($_SESSION['usuarios'][$gmail])) {
        $_SESSION['usuarios'][$gmail] = $senha;
        $sucesso = "Cadastro realizado! Agora faça login.";
    } else {
        $erro = "Este Gmail já está cadastrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">Apostas Esportivas</div>
</header>

<main>
    <section class="login">

        <h1>Login</h1>

        <?php if(isset($erro)) echo "<p style='color:red'>$erro</p>"; ?>
        <?php if(isset($sucesso)) echo "<p style='color:green'>$sucesso</p>"; ?>

        <form method="POST">

            <label>Gmail:</label>
            <input type="email" name="gmail" required>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <button type="submit" name="login">Entrar</button>

            <hr>

            <h2>Criar Conta</h2>

            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>

    </section>
</main>

</body>
</html>
