<?php
require "db_conexion.php";

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Evitar registros duplicados
    $check = $conn->query("SELECT * FROM usuarios WHERE email='$email'");
    if ($check->num_rows > 0) {
        $msg = "El correo ya está registrado.";
    } else {
        $sql = "INSERT INTO usuarios (fullname, email, password)
                VALUES ('$fullname', '$email', '$password')";
        
        if ($conn->query($sql)) {
            header("Location: login.php?msg=Cuenta creada");
            exit();
        } else {
            $msg = "Error al registrar.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Crear Cuenta | TiendaGames</title>
<link rel="stylesheet" href="CSS/register.css">
</head>
<body>

<!-- Efecto Glow Gamer -->
<div class="glow-bg"></div>

<!-- Caja de registro -->
<div class="auth-box">

    <h2>Crear Cuenta</h2>

    <?php if ($msg != ""): ?>
        <div class="alert"><?php echo $msg; ?></div>
    <?php endif; ?>

    <form method="POST">

        <input type="text" name="fullname" placeholder="Nombre completo" required>

        <input type="email" name="email" placeholder="Correo" required>

        <input type="password" name="password" placeholder="Contraseña" required>

        <button class="btn" type="submit">Registrarme</button>

        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>

    </form>

</div>

</body>
</html>
