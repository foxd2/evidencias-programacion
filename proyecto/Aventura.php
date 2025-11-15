<?php
require 'cdn.html';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aventura</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSSp/aventura.css">
</head>

<body>
    <div class="container">
        <main class="game-grid row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAja61sM_PjXjw68qxLMbiy-nFyAgPuSlNfg&s"
                        alt="Game 1" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Assassin's Creed II</h3>
                        <p class="card-text">Viaja al Renacimiento italiano y vive la historia de Ezio Auditore, un
                            asesino en busca de venganza. Explora ciudades históricas, escala edificios y derrota a tus
                            enemigos en este clásico de la saga.
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal1">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://s.13.cl/sites/default/files/styles/manualcrop_850x475/public/esports/articulo/field-imagen/2022-02/portadaelden.jpg.jpeg?itok=31PS9V4L"
                        alt="Game 2" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Elden Ring</h3>
                        <p class="card-text">Embárcate en una aventura épica en un vasto mundo abierto creado por
                            FromSoftware y George R.R. Martin. Enfrenta desafíos imponentes y descubre secretos oscuros.
                            ¡Un desafío que no te puedes perder!


                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal2">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://static1-es.millenium.gg/articles/7/50/35/7/@/276248-god-of-warrrr-orig-1-article_cover_bd-1.jpg"
                        alt="Game 3" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">God of War Ragnarök</h3>
                        <p class="card-text">Acompaña a Kratos y Atreus en una épica aventura nórdica mientras enfrentan
                            el apocalipsis de los dioses. Descubre una narrativa profunda y combate brutal en un mundo
                            mitológico impresionante.

                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal3">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202010/0222/b3iB2zf2xHj9shC0XDTULxND.png"
                        alt="Game 4" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Ghost of Tsushima</h3>
                        <p class="card-text">Conviértete en un samurái y defiende tu hogar de la invasión mongola.
                            Explora el hermoso Japón feudal, usa el sigilo y el combate para liberar Tsushima. ¡Una
                            experiencia visual y jugable inolvidable!

                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal4">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn1.epicgames.com/b30b6d1b4dfd4dcc93b5490be5e094e5/offer/RDR2476298253_Epic_Games_Wishlist_RDR2_2560x1440_V01-2560x1440-2a9ebe1f7ee202102555be202d5632ec.jpg"
                        alt="Game 5" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Red Dead Redemption 2</h3>
                        <p class="card-text">Sumérgete en el Salvaje Oeste y vive la emocionante historia de Arthur
                            Morgan, un forajido en un mundo abierto lleno de detalles y aventuras. ¡Explora, pelea y
                            sobrevive en un entorno impresionante!

                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal5">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/105600/header.jpg?t=1666290860"
                        alt="Game 6" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Terraria</h3>
                        <p class="card-text">Cava, construye y lucha en un mundo sandbox en 2D lleno de posibilidades
                            infinitas. Explora cuevas, derrota jefes y crea tu propio mundo. ¡La creatividad y la
                            aventura te esperan en Terraria!

                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal6">Ver más</button>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>

    <!-- Modales -->
    <!-- Modal 1 -->
    <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel1">Detalles de Assassin's Creed II</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://images3.alphacoders.com/144/144809.jpg" class="img-fluid"
                        alt="Imagen de RESIDENT EVII">
                    <p class="mt-3">Assassin's Creed II" es un videojuego de acción y aventura desarrollado por Ubisoft.
                        Es la secuela
                        directa de "Assassin's Creed" y sigue la historia de Desmond Miles, un hombre moderno que revive
                        las
                        memorias de su ancestro asesino, Ezio Auditore da Firenze, a través de una máquina llamada
                        Animus. La
                        trama se desarrolla en Italia durante el Renacimiento y sigue a Ezio mientras se convierte en un
                        asesino
                        maestro para vengar la muerte de su familia y descubrir una conspiración más grande.</p>
                    <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel2">Detalles de Elden Ring</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://assetsio.gnwcdn.com/-1636033727589.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp"
                        class="img-fluid" alt="Imagen de OUTLAST">
                    <p class="mt-3">EL NUEVO RPG DE ACCIÓN DE FANTASÍA. Levántate, tiznado, y déjate guiar por la gracia
                        para esgrimir el
                        poder del Anillo de Elden y convertirte en un Señor de Elden en las Tierras Intermedias.</p>
                    <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel3">Detalles de God of War Ragnarök</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://live.staticflickr.com/65535/52441662842_0869ee2900_h.jpg" class="img-fluid"
                        alt="Imagen de DARKWOOD">
                    <p class="mt-3">Habiendo consumado su venganza contra los dioses el Olimpo años atrás, Kratos ahora
                        vive como un hombre
                        en el reino de los dioses y los monstruos nórdicos. En este hostil e inhóspito mundo, debe
                        pelear por
                        sobrevivir... y enseñarle a su hijo a hacer lo mismo.</p>
                    <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel4">Detalles de >Ghost of Tsushima</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://i.ytimg.com/vi/nVhXp6FX7Y4/maxresdefault.jpg" class="img-fluid"
                        alt="Imagen de LIES OF P">
                    <p class="mt-3">Se avecina una tormenta. Vive la experiencia completa de Ghost of Tsushima: Versión
                        del Director para PC.
                        Forja tu propio camino y descubre las maravillas de este juego de aventura y acción de mundo
                        abierto, a
                        cargo de Sucker Punch Productions, Nixxes Software y PlayStation Studios.</p>
                    <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal fade" id="productModal5" tabindex="-1" role="dialog" aria-labelledby="productModalLabel5"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel5">Detalles de Red Dead Redemption 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://cdn.images.express.co.uk/img/dynamic/143/590x/1031108_1.jpg" class="img-fluid"
                        alt="Imagen de THE WALKING DEAD">
                    <p class="mt-3">Con más de 175 premios al Juego del año y más de 250 valoraciones perfectas, Red
                        Dead Redemption 2 es la
                        épica historia de Arthur Morgan y la banda de Van der Linde, que huyen por Estados Unidos en los
                        albores del
                        siglo XX. También incluye acceso al mundo multijugador compartido de Red Dead Online.</p>
                    <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade" id="productModal6" tabindex="-1" role="dialog" aria-labelledby="productModalLabel6"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel6">Detalles de Terraria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://m.media-amazon.com/images/S/pv-target-images/f1ecc153b5f4b112114ee2216850260b564abcacb65e17e9ab700d1d0fcbad33.jpg"
                        class="img-fluid" alt="Imagen de BRAMBLE: THE MOUNTAIN KING">
                    <p class="mt-3">¡Excava, lucha, explora, construye! Nada es imposible en este juego de aventuras
                        lleno de acción.</p>
                    <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>