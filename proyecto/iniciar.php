<?php
session_start();
require 'db_conexion.php';

// Verificar si el usuario está autenticado, redirigir al perfil si es así
//if (isset($_SESSION['usuario_id'])) {
//    exit();
//}

// Verificar si se envió el formulario de crear cuenta
if (isset($_POST['crear_cuenta'])) {
    $name = $_POST['name'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Asegúrate de obtener la contraseña del formulario

    // Validar que todos los campos requeridos estén completos
    if (!empty($name) && !empty($matricula) && !empty($email) && !empty($password)) {
        // Hash de la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insertar en la tabla de usuarios
        $sql = $cnnPDO->prepare("INSERT INTO users (name, matricula, email, password) VALUES (:name, :matricula, :email, :password)");
        $sql->bindParam(':name', $name);
        $sql->bindParam(':matricula', $matricula);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':password', $hashed_password); // Guardar la contraseña hashed

        if ($sql->execute()) {
            echo "Usuario registrado correctamente.";
        } else {
            echo "Error al registrar el usuario: " . $sql->errorInfo()[2]; // Muestra el mensaje de error de SQL
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="lol.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Gestión de Registros</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">name:</label>
                                <input type="text" class="form-control"  name="name">
                            </div>
                            <div class="mb-3">
                                <label for="matricula" class="form-label">matricula:</label>
                                <input type="text" class="form-control"  name="matricula">
                            </div>
                            <div class="mb-3">
                                <label for="emali" class="form-label">correo:</label>
                                <input type="text" class="form-control"  name="email" >
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">password:</label>
                                <input type="number" class="form-control" name="password" >
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning" name="crear_cuenta">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>