<?php 

    include_once '../../config/config.php';

    $sql = "SELECT * FROM articulos";

    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    // var_dump($resultado);

    $registros_por_pagina = 5;
    
    // Contar registros de la base de datos
    $total_registros_db = $sentencia->rowCount();

    // echo $total_registros_db;
    
    $paginas = $total_registros_db/$registros_por_pagina;
    $paginas = ceil($paginas);
    echo $paginas;

?>
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

    <section class="my-4">
        <div class="container">
            <div class="card">
                <div class="card-header text-center h4 font-weight-light">
                    Listado
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <a href="agregar.php" type="button" class="btn btn-success">
                            Nuevo registro
                        </a>
                    </div>

                    <table class="table table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="">ID</th>
                                <th class="">Nombre</th>
                                <th class="">Sede</th>
                                <th class="">Fecha del curso</th>
                                <th class="">Factura</th>
                                <th class="">Proveedor</th>
                                <th class="">Fecha de compra</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($resultado as $articulo): ?>
                            <tr>
                                <td><?php echo $articulo['id'] ?></td>
                                <td><?php echo $articulo['articulo'] ?></td>
                                <td><?php echo $articulo['articulo'] ?></td>
                                <td><?php echo $articulo['articulo'] ?></td>
                                <td><?php echo $articulo['articulo'] ?></td>
                                <td><?php echo $articulo['articulo'] ?></td>
                                <td><?php echo $articulo['articulo'] ?></td>
                                <td><a href="" class="btn btn-warning btn-block btn-sm">Editar</a></td>
                                <td><a href="" class="btn btn-danger btn-block btn-sm">Eliminar</a></td>
                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                            </li>
                            
                            <?php for($i=0; $i<$paginas; $i++): ?>
                            
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <?php echo $i+1 ?>
                                </a>
                            </li>
                            
                            <?php endfor ?>

                            <li class="page-item">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>
    
    <script src="../../dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../../dist/js/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>