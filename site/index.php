<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Início - Apostas Esportivas</title>
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
    <section class="destaques">
      <h1>Destaques das Apostas</h1>
      <p>Confira as principais apostas em andamento e promoções exclusivas!</p>

      <section class="apostas-em-andamento">
        <h2>Apostas em Andamento</h2>
        <div class="apostas-grid">

          <!-- Jogo 1 -->
          <div class="aposta-card">
            <img src="imagens/futebol.jpg" alt="Futebol - Flamengo x Palmeiras">
            <h3>Flamengo x Palmeiras</h3>
            <p>Grande clássico com odds imperdíveis! Quem leva a melhor?</p>
            <a href="login.php?jogo=flamengo_x_palmeiras">
              <button>Apostar Agora</button>
            </a>
          </div>

          <!-- Jogo 2 -->
          <div class="aposta-card">
            <img src="imagens/basquete.jpg" alt="Basquete - Lakers x Celtics">
            <h3>Lakers x Celtics</h3>
            <p>Disputa acirrada na NBA. Aposte no seu time favorito!</p>
            <a href="login.php?jogo=lakers_x_celtics">
              <button>Apostar Agora</button>
            </a>
          </div>

          <!-- Jogo 3 -->
          <div class="aposta-card">
            <img src="imagens/tenis.jpg" alt="Tênis - Nadal x Djokovic">
            <h3>Nadal x Djokovic</h3>
            <p>Duelo épico no Grand Slam. Quem vencerá?</p>
            <a href="login.php?jogo=nadal_x_djokovic">
              <button>Apostar Agora</button>
            </a>
          </div>

        </div>
      </section>

    </section>
  </main>

  <footer>
    <p>&copy; 2025 Apostas Esportivas. Todos os direitos reservados.</p>
  </footer>

</body>
</html>
