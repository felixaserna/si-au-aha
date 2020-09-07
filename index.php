
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/estlilo.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>

<div class="login-page mt-4">
    <div class="form">
      
      <div class="my-3">
        <h3 class="font-weight-light">ASPEC System</h3>
        <hr>
        <h4 class="font-weight-light">Sistema de Auditoría AHA</h4>
      </div>

      <form action="validar.php" method="POST" class="login-form mt-4">
        <input type="text" name="usuario" placeholder="Usuario">
        <br>
        <input type="password" name="password" placeholder="Contraseña">
        <br>
        <button type="sumbit" >Ingresar</button>
        <br><br>
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