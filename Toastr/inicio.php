<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $correct_username = 'Admin';
    $correct_password = '1234';

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['loggedin'] = true;
        header('Location: admin.php');
        exit();
    } else {
        $error_message = 'Nombre de usuario o contraseña incorrectos.';
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Iniciar Sesión</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Iniciar Sesión como Administrador</h2>
        
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Administrador:</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Iniciar Sesión</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Regresar al inicio</a>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(function() {
            <?php if (isset($error_message)): ?>
                toastr.error('<?php echo $error_message; ?>');
            <?php endif; ?>
        });
    </script>
</body>
</html>
