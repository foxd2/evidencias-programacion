<?php
require 'cdn.html';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam Market</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSSp/terror.css">
</head>
<body>
   <div class="container">
        <main class="game-grid row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://movilforum.com/wp-content/uploads/2020/12/New-Project-2020-12-29T111131.541.jpg" alt="Game 1" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">RESIDENT EVII</h3>
                        <p class="card-text">Es matar o morir</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal1">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://depor.com/resizer/q7Hb0xZed380AEqt5-ytR258uY8=/980x528/smart/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/YSJGHMQ3QREX5GIBMYRTCQUULY.jpg" alt="Game 2" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">OUTLAST</h3>
                        <p class="card-text">No confíes en nadie y muévete con cuidado; cualquier persona es un enemigo</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal2">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.H_2yEsVSYzsonCajER0C4gHaEJ&pid=Api&P=0&h=180" alt="Game 3" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">DARKWOOD</h3>
                        <p class="card-text">¿Esas cosas ya no son humanas?</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal3">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://tecnobits.net/wp-content/uploads/2023/10/lies-of-pi-xbox.jpg" alt="Game 4" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">LIES OF P</h3>
                        <p class="card-text">Estas marionetas buscan solo una masacre, ¡corre!</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal4">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://tecnobits.net/wp-content/uploads/2023/10/the-walking-dead.jpg" alt="Game 5" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">THE WALKING DEAD</h3>
                        <p class="card-text">La humanidad se fue al carajo, ¡maldición! No quedan balas</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal5">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://tecnobits.net/wp-content/uploads/2023/10/bramble-the-mountain-king-v0-eb8ebig53p9b1.jpg" alt="Game 6" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">BRAMBLE: THE MOUNTAIN KING</h3>
                        <p class="card-text">Esto no es un cuento de hadas, es el infierno de los cuentos de hadas. ¿¡Eso es un gnomo con cara humana!?</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal6">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://tecnobits.net/wp-content/uploads/2018/07/the_evil_within_2.jpg" alt="Game 7" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">THE EVIL WITHIN 1,2</h3>
                        <p class="card-text">Maldición, esto no termina. ¿Hasta dónde llegará ese virus?</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal7">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://tecnobits.net/wp-content/uploads/2023/10/bramble-the-mountain-king-v0-eb8ebig53p9b1.jpg" alt="Game 8" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">DOOM 3</h3>
                        <p class="card-text">No son cosas creadas por Dios, vienen del mismo infierno</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal8">Ver más</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modales -->
    <!-- Modal 1 -->
    <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel1">Detalles de RESIDENT EVII</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="https://movilforum.com/wp-content/uploads/2020/12/New-Project-2020-12-29T111131.541.jpg" class="img-fluid" alt="Imagen de RESIDENT EVII">
            <p class="mt-3">MOCASO CON PATAS.</p>
            <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel2" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel2">Detalles de OUTLAST</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="https://depor.com/resizer/q7Hb0xZed380AEqt5-ytR258uY8=/980x528/smart/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/YSJGHMQ3QREX5GIBMYRTCQUULY.jpg" class="img-fluid" alt="Imagen de OUTLAST">
            <p class="mt-3">No confíes en nadie y muévete con cuidado; cualquier persona es un enemigo.</p>
            <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel3" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel3">Detalles de DARKWOOD</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="https://tse2.mm.bing.net/th?id=OIP.H_2yEsVSYzsonCajER0C4gHaEJ&pid=Api&P=0&h=180" class="img-fluid" alt="Imagen de DARKWOOD">
            <p class="mt-3">¿Esas cosas ya no son humanas? Sobrevive en un mundo lleno de horrores.</p>
            <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel4" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel4">Detalles de LIES OF P</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="https://tecnobits.net/wp-content/uploads/2023/10/lies-of-pi-xbox.jpg" class="img-fluid" alt="Imagen de LIES OF P">
            <p class="mt-3">Estas marionetas buscan solo una masacre, ¡corre por tu vida!</p>
            <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal fade" id="productModal5" tabindex="-1" role="dialog" aria-labelledby="productModalLabel5" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel5">Detalles de THE WALKING DEAD</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="https://tecnobits.net/wp-content/uploads/2023/10/the-walking-dead.jpg" class="img-fluid" alt="Imagen de THE WALKING DEAD">
            <p class="mt-3">La humanidad se fue al carajo, ¡maldición! No quedan balas.</p>
            <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade" id="productModal6" tabindex="-1" role="dialog" aria-labelledby="productModalLabel6" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel6">Detalles de BRAMBLE: THE MOUNTAIN KING</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="https://tecnobits.net/wp-content/uploads/2023/10/bramble-the-mountain-king-v0-eb8ebig53p9b1.jpg" class="img-fluid" alt="Imagen de BRAMBLE: THE MOUNTAIN KING">
            <p class="mt-3">Esto no es un cuento de hadas, es el infierno de los cuentos de hadas. ¿¡Eso es un gnomo con cara humana!?</p>
            <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 7 -->
    <div class="modal fade" id="productModal7" tabindex="-1" role="dialog" aria-labelledby="productModalLabel7" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel7">Detalles de THE EVIL WITHIN 1,2</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="https://tecnobits.net/wp-content/uploads/2018/07/the_evil_within_2.jpg" class="img-fluid" alt="Imagen de THE EVIL WITHIN">
            <p class="mt-3">Maldición, esto no termina. ¿Hasta dónde llegará ese virus?</p>
            <button type="button" class="btn btn-success mt-3">Agregar al carrito</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 8 -->
    <div class="modal fade" id="productModal8" tabindex="-1" role="dialog" aria-labelledby="productModalLabel8" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel8">Detalles de DOOM 3</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="https://tecnobits.net/wp-content/uploads/2023/10/bramble-the-mountain-king-v0-eb8ebig53p9b1.jpg" class="img-fluid" alt="Imagen de DOOM 3">
            <p class="mt-3">No son cosas creadas por Dios, vienen del mismo infierno.</p>
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
</div>
</body>
</html>
