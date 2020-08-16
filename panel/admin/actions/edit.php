<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    
    <link rel="stylesheet" href="../../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    
    <script src="../../../dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
    <script src="../../../dist/js/popper.min.js"></script>
    <script src="../../../dist/js/bootstrap.min.js"></script>
</head>
<body>

    <?php 

        if (
            !isset($_POST["id"]) || 
            !isset($_POST["nombre"]) || 
            !isset($_POST["apellidoPaterno"]) ||
            !isset($_POST["apellidoMaterno"]) || 
            !isset($_POST["sede"]) || 
            !isset($_POST["fechaCurso"]) || 
            /* !isset($_POST["factura"]) || */
            !isset($_POST["proveedor"]) || 
            !isset($_POST["fechaCompra"])
            ) {
                exit();
        }

        include_once "../../../config/config.php";

        $id = $_POST['id'];
        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["apellidoPaterno"];
        $apellidoMaterno = $_POST["apellidoMaterno"];
        $sede = $_POST["sede"];
        $fechaCurso = $_POST["fechaCurso"];
        $factura = $_FILES["factura"];
        $proveedor = $_POST["proveedor"];
        $fechaCompra = $_POST["fechaCompra"];

        $sentencia = 
            $pdo->prepare(
                "UPDATE registro_facturas SET nombre = ?, apellidoPaterno = ?, apellidoMaterno = ?, 
                sede = ?, fechaCurso = ?, proveedor = ?, fechaCompra = ? WHERE id = ?;"
            );
        
        $resultado = $sentencia->execute([$nombre, $apellidoPaterno, $apellidoMaterno, $sede, $fechaCurso, $proveedor, $fechaCompra, $id]);

        if ($resultado === TRUE) {
            echo 
                "
                    <script type='text/javascript'>
                        swal({
                            title: 'Registro editado exitosamente',
                            type: 'success',
                            showConfirmButton: true,
                            confirmButtonText: 'ACEPTAR',
                            closeOnConfirm: false
                            }). then(function(result){
                            window.location = '../index.php?pagina=1';
                        })
                    </script>
                ";
        } else {
            echo 
                "
                    <script type='text/javascript'>
                        swal({
                            title: 'Ocurrió un error. Vuelve a intentarlo.',
                            type: 'error',
                            showConfirmButton: true,
                            confirmButtonText: 'ACEPTAR',
                            closeOnConfirm: false
                            }). then(function(result){
                            window.location = '../index.php?pagina=1';
                        })
                    </script>
                ";
        }
    
    ?>
    
</body>
</html>