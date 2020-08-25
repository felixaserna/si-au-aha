<?php
session_start();
require_once 'conexion.php';
    
      
  if(isset($_POST['usuario']) && isset($_POST['password'])){    

try{
  $conexionlog = new PDO('mysql:host='.$host.'; dbname='.$bd,$usuario,$clave);
}catch(PDOException $e){
  echo "Error de conexion";
  exit;
}
      $u= $_POST['usuario'];
      $p= $_POST['password'];
      $conexionlog ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query = $conexionlog->prepare("SELECT * FROM  usuariosdb WHERE usuario=:u AND password = :p");

      $query->bindParam(":u",$u);
      $query->bindParam(":p",$p);
      $query->execute();
      $usuario=$query->fetch(PDO::FETCH_ASSOC);
      
      if($usuario){

        //var_dump($usuario);
        $_SESSION['usuario']=$usuario["usuario"];
        $_SESSION['estado']=$usuario["estado"];
        $_SESSION['iniciarsesion']="ok";
        $_SESSION['id']=$usuario["id"];
        $userid=$usuaio["id"];
        
        if($_SESSION['iniciarsesion']=="ok"){
        
            if($_SESSION['usuario'] =="admin"){
          header("location:public/index.php?pagina=1");
        }else{
          header("location:index.php");
        }
    }

      }else{
        /*echo "Datos invalidos";*/
       /* echo'<script type="text/javascript">
    alert("Usuario o Contraseña erroneos...");
    </script>';*/
      echo "<script> swal({
            title: '¡ERROR!',
            text: 'Usuario o Contraseña erroneos',
      });</script>";
        
      }
  }
  ?>