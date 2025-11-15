<?php
session_start();
require 'db_conexion.php';

if (!isset($_SESSION['numero_tarjeta'])) {
    header("Location: login.php");
    exit();
}

$success_message = '';
$error_message = '';

try {
    $sql = $cnnPDO->prepare("SELECT numero_tarjeta, dia_pago, num_celular, nombre, foto, correo FROM u3_registro");
    $sql->execute();
    $users = $sql->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error_message = 'Error al recuperar los datos: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #b3e5fc;
            color: #01579b;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            overflow: auto;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 1000px;
            width: 100%;
        }
        .profile-picture {
            max-width: 100px;
            max-height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Usuarios Registrados</h2>

        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo htmlspecialchars($success_message); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <?php foreach ($users as $user): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <?php if (!empty($user['foto'])): ?>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($user['foto']); ?>" class="profile-picture" alt="Foto de perfil">
                            <?php else: ?>
                                <img src="default-avatar.png" class="profile-picture" alt="Foto de perfil"> 
                            <?php endif; ?>
                            <h5 class="card-title"><?php echo htmlspecialchars($user['nombre']); ?></h5>
                            <p class="card-text"><strong>Correo:</strong> <?php echo htmlspecialchars($user['correo']); ?></p>
                            <p class="card-text"><strong>Día de Pago:</strong> <?php echo htmlspecialchars($user['dia_pago']); ?></p>
                            <p class="card-text"><strong>Número de Celular:</strong> <?php echo htmlspecialchars($user['num_celular']); ?></p>
                            <p class="card-text"><strong>Número de Tarjeta:</strong> <?php echo htmlspecialchars($user['numero_tarjeta']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <a href="index.php" class="btn btn-secondary mt-3">Regresar al inicio</a>
    </div>
</body>
</html>
