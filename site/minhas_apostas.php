<?php include 'conexao.php'; ?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Minhas Apostas</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
  <div class="logo">Apostas Esportivas</div>
  <nav>
    <ul>
      <li><a href="index.php">Início</a></li>
      <li><a href="esportes.php">Esportes</a></li>
      <li><a href="minhas_apostas.php">Minhas Apostas</a></li>
      <li><a href="contato.php">Contato</a></li>
      <li><a href="admin/index.php" style="color: #f1f3f2ff; font-weight: bold;">Admin</a></li>
    </ul>
  </nav>
</header>

<main>
  <section>

    <h1>Minhas Apostas</h1>

    <?php if (!empty($_SESSION['apostas'])): ?>
      <ul>
        <?php foreach ($_SESSION['apostas'] as $a): ?>
          <li>
            <strong>Jogo:</strong> <?= $a['jogo'] ?> |
            <strong>Valor:</strong> R$ <?= $a['valor'] ?> |
            <strong>Telefone:</strong> <?= $a['telefone'] ?> |
            <strong>Data:</strong> <?= $a['data'] ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>Nenhuma aposta realizada ainda.</p>
    <?php endif; ?>

  </section>
</main>

</body>
</html>
