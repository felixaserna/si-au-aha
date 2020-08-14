<?php

    // Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
    mb_internal_encoding('UTF-8');
    
    // Esto le dice a PHP que generaremos cadenas UTF-8
    mb_http_output('UTF-8');

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
    //  class="font-weight-light"echo $paginas;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
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

                    <?php 

                        if(!$_GET) {
                            header('Location:index.php?pagina=1');
                        }

                        if($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0) {
                            header('Location:index.php?pagina=1');
                        }

                        $iniciar = ($_GET['pagina']-1)*$registros_por_pagina;
                        // echo $iniciar;

                        $sql_registros = 'SELECT * FROM articulos LIMIT :iniciar,:nregistros';
                        $sentencia_registros = $pdo->prepare($sql_registros);
                        $sentencia_registros->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
                        $sentencia_registros->bindParam(':nregistros', $registros_por_pagina, PDO::PARAM_INT);
                        $sentencia_registros->execute();

                        $resultado_registros = $sentencia_registros->fetchAll();
                    ?>

                    <table class="table table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="font-weight-bold">ID</th>
                                <th class="font-weight-bold">Nombre</th>
                                <th class="font-weight-bold">Sede</th>
                                <th class="font-weight-bold">Fecha del curso</th>
                                <th class="font-weight-bold">Factura</th>
                                <th class="font-weight-bold">Proveedor</th>
                                <th class="font-weight-bold">Fecha de compra</th>
                                <th class="font-weight-bold">Editar</th>
                                <th class="font-weight-bold">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($resultado_registros as $articulo): ?>
                            <tr>
                                <td>
                                    <?php echo $articulo['id'] ?>
                                </td>
                                <td>
                                    <?php echo $articulo['articulo'] ?>
                                </td>
                                <td>
                                    <?php echo $articulo['articulo'] ?>
                                </td>
                                <td>
                                    <?php echo $articulo['articulo'] ?>
                                </td>
                                <td>
                                    <?php echo $articulo['articulo'] ?>
                                </td>
                                <td>
                                    <?php echo $articulo['articulo'] ?>
                                </td>
                                <td>
                                    <?php echo $articulo['articulo'] ?>
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning btn-block btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger btn-block btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">
                                <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                </a>
                            </li>
                            
                            <?php for($i=0; $i<$paginas; $i++): ?>
                            
                            <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active':  '' ?>">
                                <a class="page-link" href="index.php?pagina=<?php echo $i+1 ?>">
                                    <?php echo $i+1 ?>
                                </a>
                            </li>
                            
                            <?php endfor ?>

                            <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
                                <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
</body>
</html>