<?php
require 'digitalarcade.php';
require 'cdn.html';

    if(isset($_POST["guardar"]))
    {
        $titulo = $_POST['titulo'];
        $size = getimagesize($_FILES["img"]["tmp_name"]);
        $precio = $_POST['precio'];
        if($size !== false)
        {
            //Se utiliza para acceder al nombre temporal del archivo que se ha subido a través de un formulario HTML.
            $cargarImagen = $_FILES['img']['tmp_name'];
            
            $img = fopen($cargarImagen,'rb');
     
            $sql=$cnnPDO->prepare("INSERT INTO juegos
                (titulo, img, precio) VALUES (:titulo, :img, :precio)");

            //Asignar el contenido de las variables a los parametros
            $sql->bindParam(':titulo',$titulo);
            $sql->bindParam(':img',$img, PDO::PARAM_LOB);
            $sql->bindParam(':precio',$precio);

            //Ejecutar la variable $sql
            $sql->execute();
            unset($sql);   
        }
    }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="titulo">
        <input type="file"accept="image/jpg" name="img">
        <input type="text" name="precio">        
        <button type="submit" name="guardar">Guardar</button>
    </form>
</body>
</html>