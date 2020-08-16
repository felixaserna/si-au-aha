<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>

    <link rel="stylesheet" href="../../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    
    <script src="../../../dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
    <script src="../../../dist/js/popper.min.js"></script>
</head>
<body>

    <?php 

        if (!isset($_GET['id'])) {
            exit();
        }
        
        $id = $_GET["id"];

        include_once "../../../config/config.php";

        $sentencia = $pdo->prepare("DELETE FROM registro_facturas WHERE id = ?;");

        $resultado = $sentencia->execute([$id]);

        if ($resultado === TRUE ) {
            echo
                "
                    <script type='text/javascript'>
                        swal({
                            title: 'Registro eliminado exitosamente',
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
                            title: 'Ocurrió un problema. Vuelve a intentarlo.',
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