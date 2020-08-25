
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="estlilo.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>

<div class="login-page">
    <div class="form">
      <form action="validar.php" method="POST" class="login-form">
        <input type="text" name="usuario" placeholder="Usuario">
        <br>
        <input type="password" name="password" placeholder="Contraseña">
        <br>
        <button type="sumbit" >Ingresar</button>
        <p>¿Aún no tienes cuenta?</p>
        <a class="empresa" href="crearusuario.php">Registrarse</a>
      </form>
    </div>
  </div>

    <script src="dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>