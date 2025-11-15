<?php
require_once "db_conexion.php";

$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $password = trim($_POST['password']); 

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");
    $stmt->execute([
        ':email'    => $email,
        ':password' => $password
    ]);

    if ($stmt->rowCount() === 1) {
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION["user"]  = $data["fullname"];
        $_SESSION["email"] = $data["email"];

        header("Location: index.php");
        exit();
    } else {
        $msg = "Correo o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Iniciar Sesión | TiendaGames</title>
<link rel="stylesheet" href="CSS/logi.css"> 
</head>
<body>


<div style="display:flex;align-items:center;justify-content:center;min-height:100vh;padding:20px;">
    <div class="auth-box">
        <h2>Iniciar Sesión</h2>

        <?php if ($msg !== ""): ?>
            <div class="alert"><?php echo htmlspecialchars($msg); ?></div>
        <?php endif; ?>

        <form method="POST" style="margin-top:12px;">
            <input type="email" name="email" placeholder="Correo" required>
            <input type="password" name="password" placeholder="Contraseña" required>

            <button class="btn" type="submit">Entrar</button>
        </form>

        <p style="margin-top:12px;color:#94a3b8;">¿No tienes cuenta? <a href="register.php" style="color:var(--accent);">Crear cuenta</a></p>
    </div>
</div>

</body>
</html>
