<?php
session_start();

if (isset($_GET['logout'])) {
    $_SESSION = [];

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TiendaGames</title>

<link rel="stylesheet" href="CSS/index.css">

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>

<div class="site">

<header class="topbar">
    <div class="brand">Tienda<span>Games</span></div>

    <nav class="nav">
        <a href="index.php">Inicio</a>
        <a href="#catalog">Juegos</a>
        <a href="#categories">Categorías</a>
    </nav>

    <div class="actions">

        <?php if(isset($_SESSION['user'])): ?>
            <div class="profile">
                <ion-icon name="person-circle-outline"></ion-icon>
                <span><?php echo $_SESSION['user']; ?></span>
                <a href="index.php?logout=true" class="btn small">Cerrar sesión</a>
            </div>
        <?php else: ?>
            <a href="login.php" class="btn small">Iniciar Sesión</a>
            <a href="register.php" class="btn small primary">Crear Cuenta</a>
        <?php endif; ?>

        <button id="cart-btn" class="btn-cart">
            <ion-icon name="cart-outline"></ion-icon>
            <span id="cart-count">0</span>
        </button>

        <button id="theme-toggle" class="btn">Tema</button>
    </div>
</header>

<main>

<section class="hero">
    <div class="hero-left">
        <h1>Bienvenido a TiendaGames</h1>
        <p>Compra los mejores títulos, ofertas semanales y demos gratis.</p>
        <a href="#catalog" class="btn primary">Ver juegos</a>
    </div>

    <div class="hero-right">
        <img src="https://i.postimg.cc/6QSXtjKx/endgame.jpg" alt="promo">
    </div>
</section>

<section id="catalog" class="catalog">
    <div class="section-head">
        <h2>Catálogo</h2>

        <div class="filters">
            <select id="filter-category">
                <option value="all">Todas las categorías</option>
                <option value="action">Action</option>
                <option value="adventure">Adventure</option>
                <option value="rpg">RPG</option>
                <option value="sports">Sports</option>
            </select>

            <input id="search" placeholder="Buscar juego...">
        </div>
    </div>

    <div id="games-grid" class="games-grid"></div>

    <div class="load-more-wrap">
        <button id="load-more" class="btn primary">Cargar más</button>
    </div>
</section>

<section id="categories" class="categories">
    <h2>Categorías</h2>

    <div class="category-grid">
        <div class="category-card" data-category="action">Action<br><small>0 juegos</small></div>
        <div class="category-card" data-category="adventure">Adventure<br><small>0 juegos</small></div>
        <div class="category-card" data-category="rpg">RPG<br><small>0 juegos</small></div>
        <div class="category-card" data-category="sports">Sports<br><small>0 juegos</small></div>
    </div>
</section>

</main>

<footer class="footer">
<p>© 2025 TiendaGames — Hecho por Brandon</p>
</footer>

</div>

<script src="index.js"></script>

</body>
</html>
