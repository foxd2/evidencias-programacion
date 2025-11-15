<?php
require 'digitalarcade.php';
session_start();

if (isset($_SESSION['resultados'])) {
    $campo = $_SESSION['resultados'];
}



?>

<?php



if (isset($_POST['buscar'])) {
    $titulo = $_POST['titulo'];
    $query = $cnnPDO->prepare("SELECT * FROM juegos WHERE titulo=:titulo");
    $query->bindParam(':titulo', $titulo);

    $query->execute();
    $count=$query->rowCount();
    $campo= $query->fetchAll(PDO::FETCH_ASSOC);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSSp/mercado.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <header class="search-bar">
                <input type="text" placeholder="Buscar juegos..." class="search-input" name="titulo">
                <button type="submit" class="search-button" name="buscar">Buscar</button>
            </header>
        </form>

        <?php
        foreach ($campo as $row){
        echo '<div class="card">  
                <div class="card-body">
                <img src="data:image/png;base64,' . base64_encode($row['img']) . '" alt="Game 1" class="card-img">
                <h3 class="card-title">' .($row['titulo']) . '</h3>
                <p class="card-text">$ '.($row ['precio']) .'</p>
                <button class="btn">Ver más</button>
                </div>
              </div>';
    }
    ?>

</body>

</html>