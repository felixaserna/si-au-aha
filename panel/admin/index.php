<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>

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

    <section class="mt-4">
        <div class="container">
            <div class="card">
                <div class="card-header text-center h4 font-weight-light">
                    Listado
                </div>

                <div class="card-body">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#AgregarRegistro">
                        Nuevo registro
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="AgregarRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="">Nombre(s):</label>
                                            <input type="text" name="" id="" class="form-control">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="">Apellido paterno:</label>
                                            <input type="text" name="" id="" class="form-control">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="">Apellido materno:</label>
                                            <input type="text" name="" id="" class="form-control">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="">Sede:</label>
                                            <input type="text" name="" id="" class="form-control">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="">Fecha:</label>
                                            <input type="date" name="" id="" class="form-control">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <div class="custom-file">
                                                <label for="" class="">Factura:</label>
                                                <input type="file" class="form-control-file" id="" name="">
                                                <small class="form-text text-muted">
                                                    Solo puede archivos PDF
                                                </small>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="">Proveedor:</label>
                                            <input type="text" name="" id="" class="form-control">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="">Fecha de compra:</label>
                                            <input type="date" name="" id="" class="form-control">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    <script src="../../dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../../dist/js/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>