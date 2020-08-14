<?php 

    if (
        !isset($_POST["nombre"]) || 
        !isset($_POST["apellidoPaterno"]) ||
        !isset($_POST["apellidoMaterno"]) || 
        !isset($_POST["sede"]) || 
        !isset($_POST["fechaCurso"]) || 
        !isset($_POST["proveedor"]) || 
        !isset($_POST["fechaCompra"])
        ) {
            exit();
    }

    include_once '../../../config/config.php';
    
    $nombre = $_POST["nombre"];
    $apellidoPaterno = $_POST["apellidoPaterno"];
    $apellidoMaterno = $_POST["apellidoMaterno"];
    $sede = $_POST["sede"];
    $fechaCurso = $_POST["fechaCurso"];
    $proveedor = $_POST["proveedor"];
    $fechaCompra = $_POST["fechaCompra"];

    $sql = 
        $pdo->prepare(
            "INSERT INTO registro_facturas
            (nombre, apellidoPaterno, apellidoMaterno, sede, fechaCurso, proveedor, fechaCompra)
            VALUES (?, ?, ?, ?, ?, ?, ?);
        ");
    
    $resultado = $sql->execute([$nombre, $apellidoPaterno, $apellidoMaterno, $sede, $fechaCurso, $proveedor, $fechaCompra]);

    if ($resultado === TRUE) {
        echo "Insertado correctamente";  
    } else {
        echo "Ocurrió un error";
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>

    
    <link rel="stylesheet" href="../../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
</head>
<body>
    

    
    <script src="../../../dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../../../dist/js/popper.min.js"></script>
    <script src="../../../dist/js/bootstrap.min.js"></script>
</body>
</html>