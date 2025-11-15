<?php
session_start();
require 'digitalarcade.php';


if (isset($_POST['buscar'])) {
    $titulo = $_POST['titulo'];
    $query = $cnnPDO->prepare("SELECT * FROM juegos WHERE titulo=:titulo");
    $query->bindParam(':titulo', $titulo);

    $query->execute();
    $count=$query->rowCount();
    $campo= $query->fetchAll(PDO::FETCH_ASSOC);

  
    $_SESSION['resultados'] = $campo;

    header('Location:busqueda.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam Market</title>
    <link rel="stylesheet" href="CSSp/mercado.css">
    <style>
        .modal-img {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <header class="search-bar my-4">
                <input type="text" placeholder="Buscar juegos..." class="form-control mb-2" name="titulo">
                <button type="submit" class="btn btn-primary" name="buscar">Buscar</button>
            </header>
        </form>

        <main class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://media.4rgos.it/i/Argos/3792982_R_Z001A" alt="Game 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">GTAV ONLINE</h5>
                        <p class="card-text">Quieres tener la mejor organización de traficante</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal1">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 1 -->
            <div id="modal1" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">GTAV ONLINE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://media.4rgos.it/i/Argos/3792982_R_Z001A" alt="Game 1" class="modal-img">
                            <p>Más información sobre el juego GTAV ONLINE.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://upload.mguwp.net/store/FH4D/s.png" alt="Game 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Forza Horison 4</h5>
                        <p class="card-text">La hermosa forma de presumir tu amor por un pedazo de metal con ruedas nada mejor que las calles</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal2">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div id="modal2" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Forza Horison 4</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://upload.mguwp.net/store/FH4D/s.png" alt="Game 2" class="modal-img">
                            <p>Más información sobre el juego Forza Horison 4.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="http://wirelessmedia.ign.com/wireless/image/object/143/14352245/L4D2_NA-PC_ESRB-ver2.jpg" alt="Game 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Left 4 Dead 2</h5>
                        <p class="card-text">Un apocalipsis que brotó de la enfermedad mucosa</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal3">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div id="modal3" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Left 4 Dead 2</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="http://wirelessmedia.ign.com/wireless/image/object/143/14352245/L4D2_NA-PC_ESRB-ver2.jpg" alt="Game 3" class="modal-img">
                            <p>Más información sobre el juego Left 4 Dead 2.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://image.api.playstation.com/vulcan/img/cfn/11307x4B5WLoVoIUtdewG4uJ_YuDRTwBxQy0qP8ylgazLLc01PBxbsFG1pGOWmqhZsxnNkrU3GXbdXIowBAstzlrhtQ4LCI4.png" alt="Game 4" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Minecraft</h5>
                        <p class="card-text">Un mundo donde nada puede detenerte, solo tú eres quien se limita</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal4">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 4 -->
            <div id="modal4" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Minecraft</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://image.api.playstation.com/vulcan/img/cfn/11307x4B5WLoVoIUtdewG4uJ_YuDRTwBxQy0qP8ylgazLLc01PBxbsFG1pGOWmqhZsxnNkrU3GXbdXIowBAstzlrhtQ4LCI4.png" alt="Game 4" class="modal-img">
                            <p>Más información sobre el juego Minecraft.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://www.xboxdynasty.de/wp-content/uploads/2022/01/call-of-duty-warzone-2-0-3.jpg" alt="Game 5" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Warzone</h5>
                        <p class="card-text">Un mundo consumido por la guerra</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal5">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 5 -->
            <div id="modal5" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Warzone</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://www.xboxdynasty.de/wp-content/uploads/2022/01/call-of-duty-warzone-2-0-3.jpg" alt="Game 5" class="modal-img">
                            <p>Más información sobre el juego Warzone.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="http://www.hdwallpapers.in/walls/blur_game_xbox_ps3_pc-normal.jpg" alt="Game 6" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Blur</h5>
                        <p class="card-text">Las calles jamás fueron dominadas hasta ahora</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal6">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 6 -->
            <div id="modal6" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Blur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="http://www.hdwallpapers.in/walls/blur_game_xbox_ps3_pc-normal.jpg" alt="Game 6" class="modal-img">
                            <p>Más información sobre el juego Blur.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn-ext.fanatical.com/production/product/original/66a82eaa-d3b2-47b1-a387-db363abc5a64.jpeg?w=1200" alt="Game 7" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Call of Duty 2</h5>
                        <p class="card-text">¿El mundo siempre se pintó de rojo?</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal7">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 7 -->
            <div id="modal7" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Call of Duty 2</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://cdn-ext.fanatical.com/production/product/original/66a82eaa-d3b2-47b1-a387-db363abc5a64.jpeg?w=1200" alt="Game 7" class="modal-img">
                            <p>Más información sobre el juego Call of Duty 2.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://img.hype.games/cdn/9c82dfa9-d27a-445c-9bd9-2b0065ee534bmk11-cover.jpg" alt="Game 8" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mortal Kombat 11</h5>
                        <p class="card-text">¿La venganza es con los puños?</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal8">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 8 -->
            <div id="modal8" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Mortal Kombat 11</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://img.hype.games/cdn/9c82dfa9-d27a-445c-9bd9-2b0065ee534bmk11-cover.jpg" alt="Game 8" class="modal-img">
                            <p>Más información sobre el juego Mortal Kombat 11.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://external-preview.redd.it/zJcGxUfXlYEITQuNNez_bzEHg_S2aFKM-HA_3hf085E.jpg?auto=webp&s=48c915d995e8651069d6c3db8e99a818bcacff43" alt="Game 9" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Halo Infinite</h5>
                        <p class="card-text">¿El Covenant ataca de nuevo?</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal9">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 9 -->
            <div id="modal9" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Halo Infinite</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://external-preview.redd.it/zJcGxUfXlYEITQuNNez_bzEHg_S2aFKM-HA_3hf085E.jpg?auto=webp&s=48c915d995e8651069d6c3db8e99a818bcacff43" alt="Game 9" class="modal-img">
                            <p>Más información sobre el juego Halo Infinite.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 10 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn.wccftech.com/wp-content/uploads/2019/02/apex-legends-2.jpg" alt="Game 10" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Apex Legends</h5>
                        <p class="card-text">¿Eres el más grande en una batalla real?</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal10">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 10 -->
            <div id="modal10" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Apex Legends</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://cdn.wccftech.com/wp-content/uploads/2019/02/apex-legends-2.jpg" alt="Game 10" class="modal-img">
                            <p>Más información sobre el juego Apex Legends.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 11 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn11.bigcommerce.com/s-14ab2/images/stencil/1280x1280/products/2558/26189/FarCry6_Logo.3.jpg?c=2?imbypass=on" alt="Game 11" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Far Cry 6</h5>
                        <p class="card-text">La revolución se libra en las calles de Yara</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal11">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 11 -->
            <div id="modal11" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Far Cry 6</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://cdn11.bigcommerce.com/s-14ab2/images/stencil/1280x1280/products/2558/26189/FarCry6_Logo.3.jpg?c=2?imbypass=on" alt="Game 11" class="modal-img">
                            <p>Más información sobre el juego Far Cry 6.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 12 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn11.bigcommerce.com/s-14ab2/images/stencil/1280x1280/products/2558/26189/FarCry6_Logo.3.jpg?c=2?imbypass=on" alt="Game 12" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">FIFA 23</h5>
                        <p class="card-text">El fútbol nunca se detiene</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal12">Ver más</button>
                    </div>
                </div>
            </div>

            <!-- Modal 12 -->
            <div id="modal12" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">FIFA 23</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://cdn11.bigcommerce.com/s-14ab2/images/stencil/1280x1280/products/2558/26189/FarCry6_Logo.3.jpg?c=2?imbypass=on" alt="Game 12" class="modal-img">
                            <p>Más información sobre el juego FIFA 23.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Agregar a carrito</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
