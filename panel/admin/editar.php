<?php 

    if (!isset($_GET['id'])){
        exit();
    }

    $id = $_GET['id'];

    include_once '../../config/config.php';

    $sentencia = $pdo->prepare("SELECT * FROM registro_facturas WHERE id = ?;");
    $sentencia->execute([$id]);
    $registro_factura = $sentencia->fetch(PDO::FETCH_OBJ);
    if ($registro_factura === FALSE) {
        echo "No existe alguna persona con ese ID";
        exit();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body class="font-weight-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">
                Sistema de Auditoría AHA
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div class="card">
            <div class="card-header text-center">
                Editar
            </div>
            <div class="card-body">

                <form action="actions/edit.php" method="post" enctype="multipart/form-data">

                     <div class="form-row">

                        <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $registro_factura->id; ?>">
            
                        <div class="form-group col-md-4">
                            <label for="">Nombre(s):</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required value="<?php echo $registro_factura->nombre ?>">
                        </div>
            
                        <div class="form-group col-md-4">
                            <label for="">Apellido paterno:</label>
                            <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" required value="<?php echo $registro_factura->apellidoPaterno ?>">
                        </div>
            
                        <div class="form-group col-md-4">
                            <label for="">Apellido materno:</label>
                            <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" required value="<?php echo $registro_factura->apellidoMaterno ?>">
                        </div>
            
                        <div class="form-group col-md-12">
                            <label for="">Sede:</label>
                            <input type="text" name="sede" id="sede" class="form-control" required value="<?php echo $registro_factura->sede ?>">
                        </div>
            
                        <div class="form-group col-md-12">
                            <label for="">Fecha del curso:</label>
                            <input type="date" name="fechaCurso" id="fechaCurso" class="form-control" required value="<?php echo $registro_factura->fechaCurso ?>">
                        </div>
            
                        <div class="form-group col-md-6">
                            <div class="custom-file">
                                <label for="" class="">Factura:</label>
                                <input type="file" class="form-control-file" id="factura" name="factura" accept="application/pdf">
                                <small class="form-text text-muted">
                                    Solamente archivos PDF
                                </small>
                            </div>
                        </div>
            
                        <div class="form-group col-md-6">
                            <label for="">Proveedor:</label>
                            <input type="text" name="proveedor" id="proveedor" class="form-control" required value="<?php echo $registro_factura->proveedor ?>">
                        </div>
            
                        <div class="form-group col-md-12">
                            <label for="">Fecha de compra:</label>
                            <input type="date" name="fechaCompra" id="fechaCompra" class="form-control" required value="<?php echo $registro_factura->fechaCompra ?>">
                        </div>
        
                        <div class="form-group col-md-8 text-center">
                            <input type="submit" value="Editar" class="btn btn-success btn-block">
                        </div>
        
                        <div class="form-group col-md-4">
                            <a href="index.php" class="btn btn-link btn-block">Regresar al Inicio</a>
                        </div>
            
                    </div>
                
                </form>

            </div>
        </div>
    </div>


    
    <script src="../../dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../../dist/js/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>    
</body>
</html>