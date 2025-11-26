
<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contato - Apostas Esportivas</title>
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
    <section class="contato">
      <h1>Fale Conosco</h1>

      <form action="#" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required />

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required />

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

        <button type="submit">Enviar</button>
      </form>

    </section>
  </main>

  <footer>
    <p>&copy; 2025 Apostas Esportivas. Todos os direitos reservados.</p>
  </footer>

</body>
</html>
