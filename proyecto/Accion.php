<?php
require 'cdn.html';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSSp/aventura.css">
</head>

<body>
    <div class="container">
        <main class="game-grid row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202111/3013/cKZ4tKNFj9C00giTzYtH8PF1.png"
                        alt="Game 1" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Cyberpunk 2077</h3>
                        <p class="card-text">Adéntrate en Night City, una megaciudad futurista llena de acción y aventura. Personaliza tu personaje y toma decisiones que cambiarán el curso de la historia. ¡Sumérgete en el mundo del cyberpunk!
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal1">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://phantom-marca.unidadeditorial.es/1ab9e6ad56c9025d2bc6ddb061d8296d/resize/828/f/jpg/assets/multimedia/imagenes/2022/10/25/16667219664371.jpg"
                        alt="Game 2" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Call of Duty: Modern Warfare II</h3>
                        <p class="card-text">Experimenta la intensidad de la guerra moderna con gráficos impresionantes y una jugabilidad realista. Únete a operaciones tácticas y combates multijugador frenéticos. ¡Siente la adrenalina del campo de batalla!




                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal2">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://assetsio.gnwcdn.com/gta-1621612236056.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp"
                        alt="Game 3" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Grand Theft Auto V</h3>
                        <p class="card-text">Explora la ciudad de Los Santos y sus alrededores en una aventura de mundo abierto. Vive las historias entrelazadas de tres personajes únicos mientras robas, corres y luchas por sobrevivir. ¡El crimen nunca fue tan divertido!


                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal3">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn1.epicgames.com/angelonia/offer/WD2-STD-Capsule-1920x1080-2a2ed8c8265ab31156be8ab48a93dc212d5c7095.jpg" alt="Game 4"
                        class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Watch Dogs 2</h3>
                        <p class="card-text">Hackea la ciudad de San Francisco como Marcus Holloway, un talentoso hacker. Controla la tecnología, ejecuta misiones creativas y lucha contra la corrupción en un mundo abierto lleno de posibilidades. ¡Hackea todo!



                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal4">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202210/0706/EVWyZD63pahuh95eKloFaJuC.png" alt="Game 5"
                        class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Resident Evil 4</h3>
                        <p class="card-text">Sobrevive al terror en una misión para rescatar a la hija del presidente. Enfréntate a hordas de enemigos y resuelve puzzles en un entorno aterrador. ¡La acción y el horror se combinan en este clásico!



</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#productModal5">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn1.epicgames.com/offer/0c40923dd1174a768f732a3b013dcff2/EGS_TheLastofUsPartI_NaughtyDogLLC_S1_2560x1440-3659b5fe340f8fc073257975b20b7f84"
                        alt="Game 6" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">The Last of Us Part I
                        </h3>
                        <p class="card-text">Embárcate en una emotiva y peligrosa travesía en un mundo postapocalíptico. Vive la historia de Joel y Ellie mientras buscan esperanza y supervivencia. ¡Una experiencia narrativa que te tocará el corazón!



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
                    <h5 class="modal-title" id="productModalLabel1">Detalles de Cyberpunk 2077</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://i.gadgets360cdn.com/large/cyberpunk-2077_1535441606529.jpg"
                        class="img-fluid" alt="Imagen de RESIDENT EVII">
                    <p class="mt-3">Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en el futuro sombrío de Night
                City, una peligrosa megalópolis obsesionada con el poder, el glamur y las incesantes modificaciones
                corporales.</p>
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
                    <h5 class="modal-title" id="productModalLabel2">Detalles de Call of Duty: Modern Warfare II</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://cdn.oneesports.gg/cdn-data/2022/10/COD_MW2_Banner.webp"
                        class="img-fluid" alt="Imagen de OUTLAST">
                    <p class="mt-3">Call of Duty®: Modern Warfare® II sumerge a los jugadores en un conflicto mundial sin precedentes que
                    presenta el regreso de los icónicos Operadores de la Fuerza Operativa 141.</p>
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
                    <h5 class="modal-title" id="productModalLabel3">Detalles de Grand Theft Auto V</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2013/06/229376-gameplay-gta-5-detalle.jpg?tf=3840x"
                        class="img-fluid" alt="Imagen de DARKWOOD">
                    <p class="mt-3">Grand Theft Auto V para PC ofrece a los jugadores la opción de explorar el galardonado mundo de Los
                Santos y el condado de Blaine con una resolución de 4K y disfrutar del juego a 60 fotogramas por
                segundo.</p>
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
                    <h5 class="modal-title" id="productModalLabel4">Detalles de Watch Dogs 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://assets1.ignimgs.com/2016/06/13/wd2screenparkoure3160613230pm1465823081jpg-a52a42.jpg" class="img-fluid"
                        alt="Imagen de LIES OF P">
                    <p class="mt-3">Bienvenido a San Francisco. Juega como Marcus, un joven y brillante hacker, y únete al grupo de hackers más conocido, DedSec. Tu objetivo: ejecutar el mayor hackeo de la historia.</p>
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
                    <h5 class="modal-title" id="productModalLabel5">Detalles de Resident Evil 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://cdn.mobilesyrup.com/wp-content/uploads/2022/10/resident-evil-4-gameplay-scaled.jpg" class="img-fluid"
                        alt="Imagen de THE WALKING DEAD">
                    <p class="mt-3">La supervivencia es solo el comienzo. A seis años del desastre biológico en Raccoon City, Leon S. Kennedy, uno de los sobrevivientes, rastreó a la hija secuestrada del presidente hasta una aldea europea aislada, donde algo terrible le ha ocurrido a los lugareños.
                    </p>
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
                    <h5 class="modal-title" id="productModalLabel6">Detalles de The Last of Us Part I</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://press-start.com.au/wp-content/uploads/2022/07/TLOU-PT-111.jpg"
                        class="img-fluid" alt="Imagen de BRAMBLE: THE MOUNTAIN KING">
                    <p class="mt-3">Experimenta la emocionante historia y los inolvidables personajes de The Last of Us, ganador de más de 200 premios Juego del Año.
                    </p>
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