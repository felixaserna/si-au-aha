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
   <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>

<?php

require_once "conexion.php";


if(isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['apellidop']) && isset($_POST['apellidom']) && isset($_POST['password']) && isset($_POST['nomsit']) &&  isset($_POST['telefono']) ){

// Check connection
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}

$usuario=$_POST['usuario'];
$password=$_POST['password'];


function buscarRepetido($usuario,$conexion) {
$sql="SELECT * from usuariosdb where usuario= '$usuario'";
  $result=mysqli_query($conexion,$sql);
  if(mysqli_num_rows($result)>0){
    return 1;
  }else{
    return 0;
  }
  
}

if(buscarRepetido($usuario,$conexion)==1){
  echo "<script>
  alert('Este usuario ya existe');
  window.location= 'crearusuario.php'
</script>";

}else{

  $sql = "INSERT INTO usuariosdb (nombre,apellidop,apellidom,usuario, password,nomsitio,telefono) VALUES ('$_POST[nombre]','$_POST[usuario]','$_POST[apellidop]','$_POST[apellidom]','$_POST[password]','$_POST[nomsit]','$_POST[telefono]')";


  if (mysqli_query($conexion, $sql)) {
      /*echo '<script type="text/javascript">
      alert("Agregada Correctamente");
      window.location.href="loginaspec.php";
      </script>';*/
     /* echo "<script> swal({
              title: '¡EXITOSO!',
              text: 'Usuario Creado Correctamente',
           },
          function(){
            window.location='loginaspec.php'
        });
        </script>"; */
     echo '<script>
          setTimeout(function() {
              swal({
                  title: "Felicidades!",
                  text: "Usuario Creado Correctamente",
                  type: "success",
                  confirmButtonText: "Ok"
              }, function() {
                  window.location = "index.php";
              }, 1000);
          });
          </script>';
  
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        
  }
  mysqli_close($conexion);
  
}
}else{
  header('location:index.php');
}

?>

</body>
</html>