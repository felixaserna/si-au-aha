<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión</title>
  <link rel="stylesheet" href="estlilo.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
</head>
<body>
  <div class="login-page">
    <div class="">
      <h1 class="empresa2">AUDITORÍA</h1>
    </div>
    <div class="form">
      <form action="datos.php" method="POST" class="login-form">
      <input type="text" name="nombre" placeholder="nombre" required>
        <br>
        <input type="text" name="apellidop" placeholder="Apellido Paterno" required>
        <br>
        <input type="text" name="apellidom" placeholder="Apellido Materno" required>
        <br>

      <input type="text" name="usuario" placeholder="usuario" required>
        <br>
        <input type="text" name="password" placeholder="password" required>
        <br>

        <button type="sumbit" >Registrarse</button>
        <p>Ya tienes cuenta</p>
        <a href="loginaspec.php">Iniciar Sesion</a>
      </form>
    </div>
  </div>
  
</body>
</html>