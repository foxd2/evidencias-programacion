<?php

$utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

define('DB_HOST', 'localhost');
define('DB_NAME', 'tiendagames');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try {
    $conn = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASSWORD,
        $utf8
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "
    <div style='width:40%;margin:0 auto; margin-top:100px;'>
        <div class='card border border-danger  text-center'>
            <div class='card-header'>
                <font color=red>Error de Cadena de Conexión</font>
            </div>
            <div class='card-body'>
                <h6 class='card-title'>
                    <font color=red><i><strong>No se puede conectar a la base de datos.</strong></i></font>
                </h6>
                <br>
                <img src='images/Error_db.png' class='img-fluid'>
                <br><br>
                <h6 align='center'>
                    <font color=red><i><strong>
                    Verifique el nombre de la base de datos.
                    </strong></i></font>
                </h6>
            </div>
            <div class='card-footer text-muted'>
                © 2024 Copyright : Desarrollo de Sitios Web
            </div>
        </div>
    </div>";
    exit();
}

?>

