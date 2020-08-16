<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>

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

            <div class="card-header">
                Nuevo registro
            </div>

            <div class="card-body">
                <form action="actions/add.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
            
                        <div class="form-group col-md-4">
                            <label for="">Nombre(s):</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
            
                        <div class="form-group col-md-4">
                            <label for="">Apellido paterno:</label>
                            <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" required>
                        </div>
            
                        <div class="form-group col-md-4">
                            <label for="">Apellido materno:</label>
                            <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" required>
                        </div>
            
                        <div class="form-group col-md-12">
                            <label for="">Sede:</label>
                            <input type="text" name="sede" id="sede" class="form-control" required>
                        </div>
            
                        <div class="form-group col-md-12">
                            <label for="">Fecha del curso:</label>
                            <input type="date" name="fechaCurso" id="fechaCurso" class="form-control" required>
                        </div>
            
                        <div class="form-group col-md-6">
                            <div class="custom-file">
                                <label for="" class="">Factura:</label>
                                <input type="file" class="form-control-file" id="" name="" >
                                <small class="form-text text-muted">
                                    Solamente archivos PDF
                                </small>
                            </div>
                        </div>
            
                        <div class="form-group col-md-6">
                            <label for="">Proveedor:</label>
                            <input type="text" name="proveedor" id="proveedor" class="form-control" required>
                        </div>
            
                        <div class="form-group col-md-12">
                            <label for="">Fecha de compra:</label>
                            <input type="date" name="fechaCompra" id="fechaCompra" class="form-control" required>
                        </div>
        
                        <div class="form-group col-md-8 text-center">
                            <input type="submit" value="Guardar" class="btn btn-success btn-block">
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