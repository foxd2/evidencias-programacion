<?php
require 'cdn.html';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSSp/pagina1.css">
</head>

<body>
    <nav>
        <ul class="cont-ul">
            <li class="develop">
                Categorias
                <ul class="ul-second">
                    <li><a href="aventura.php">Aventura</a></li>
                    <li><a href="Estrategia.php">Estrategia</a></li>
                    <li><a href="deportes.php">Deportes</a></li>
                    <li><a href="terror.php">Terror</a></li>
                    <li><a href="Accion.php">Accion</a></li>
                    <li><a href="simulacion.php">Simulacion</a></li>
                </ul>
              <li><a href="mercado.php">Mercado</a></li>
              <li><a href="mercado.php">Carrito</a></li>
              <li><a href="mercado.php">Cuenta</a></li>
            </li>
        </ul>
    </nav>


        <h2>Destacados y Recomendados</h2>

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2022/8/1/ksfga6rlx2ugfhjd9vnk/league-of-legends"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/heroes/social/muerta.jpg"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn1.epicgames.com/offer/fn/Blade_2560x1440_2560x1440-95718a8046a942675a0bc4d27560e2bb"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://image.api.playstation.com/vulcan/coal-image-prod/cdn/molt/ALL/201905/MOLT2276_ZZ/rUhQGewc1LDM3PMCNg.png"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2017/02/guia-todos-trucos-consejos-minecraft.jpg?tf=3840x"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </body>

    </html>