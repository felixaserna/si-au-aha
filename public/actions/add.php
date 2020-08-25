<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    
    <script src="../../dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
    <script src="../../dist/js/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</head>
<body>
    
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

        include_once '../../config/config.php';
        
        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["apellidoPaterno"];
        $apellidoMaterno = $_POST["apellidoMaterno"];
        $sede = $_POST["sede"];
        $fechaCurso = $_POST["fechaCurso"];
        $factura = $_FILES["factura"]["name"];
        $proveedor = $_POST["proveedor"];
        $fechaCompra = $_POST["fechaCompra"];

        $sql = 
            $pdo->prepare(
                "INSERT INTO registro_facturas
                (nombre, apellidoPaterno, apellidoMaterno, sede, fechaCurso, factura, proveedor, fechaCompra)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?);
            ");
        
        $resultado = $sql->execute([$nombre, $apellidoPaterno, $apellidoMaterno, $sede, $fechaCurso, $factura, $proveedor, $fechaCompra]);

        $id_insert = $pdo->lastInsertId();

        if ($_FILES["factura"]["error"] > 0) {
            echo "Error al cargar archivo";
        } else {
            $permitidos = array ("application/pdf");
            $limite_kb = 10000;

            if (in_array($_FILES["factura"]["type"], $permitidos) && $_FILES["factura"]["size"] <= $limite_kb * 1024) {
                $ruta = 'facturas/' . $id_insert . '/';
                $archivo = $ruta . $_FILES["factura"]["name"];

                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }

                if (!file_exists($archivo)) {
                    $resultado_archivo = @move_uploaded_file($_FILES["factura"]["tmp_name"], $archivo);

                    if ($resultado_archivo ) {
                        // echo "Archivo Guardado";
                        echo
                            "
                                <script type='text/javascript'>
                                    swal({
                                        title: 'Archivo guardado exitosamente',
                                        type: 'success',
                                        showConfirmButton: true,
                                        confirmButtonText: 'ACEPTAR',
                                        closeOnConfirm: false
                                        })
                                    })
                                </script>
                            ";
                    } else {
                        // echo "Error al guardar el archivo";
                        echo 
                            "
                                <script type='text/javascript'>
                                    swal({
                                        title: 'Error al guardar el archivo',
                                        type: 'error',
                                        showConfirmButton: true,
                                        confirmButtonText: 'ACEPTAR',
                                        closeOnConfirm: false
                                    })
                                </script>
                            ";
                    }

                } else {
                    // echo "Archivo ya existe";
                    echo 
                        "
                            <script type='text/javascript'>
                                swal({
                                    title: 'El archivo ya existe',
                                    type: 'warning',
                                    showConfirmButton: true,
                                    confirmButtonText: 'ACEPTAR',
                                    closeOnConfirm: false
                                })
                            </script>
                        ";
                }

            } else {
                // echo "Archivo no permitido o excede el tamaño";
                echo 
                    "
                        <script type='text/javascript'>
                        swal({
                            title: 'Archivo no permitido o excede el tamaño',
                            type: 'info',
                            showConfirmButton: true,
                            confirmButtonText: 'ACEPTAR',
                            closeOnConfirm: false
                        })
                    </script>
                    ";
            }
        }

        if ($resultado === TRUE) {
            // echo "Insertado correctamente";
            echo
                "
                    <script type='text/javascript'>
                        swal({
                            title: 'Registro guardado exitosamente',
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
            // echo "Ocurrió un error";
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
                            window.location = '../agregar.php';
                        })
                    </script>
                ";
        }
    ?>

</body>
</html>