<?php
// Navbar
$header = "header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/fb28064e11.js" crossorigin="anonymous"></script>

    <title>Ivan's weather app</title>
</head>

<body>
    <div class="container-fluid">

        <!-- Navbar -->
        <?php include($header)?>

        <!-- Display info -->
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-6">
                    <img src="https://cdn-icons-png.flaticon.com/512/1163/1163661.png" alt="" width="200" height="200">
                </div>
                <div class="col-6">
                    <div class="text-white">
                        <div class="display-5">Clima el dia de hoy</div>
                    </div>

                    <!-- Form -->
                    <!-- <form action="" method="POST" autocomplete="off"> -->
                        <div class="row">
                            <div class="col">
                                <input id="Nombre_Ciudad" type="text" class="form-control" placeholder="Escribe la ciudad" aria-label="Nombre de ciuad">
                                <button id="botonCiudad" class="btn btn-light btn-outline-success" type="">Enviar</button>
                            </div>
                        </div>
                    <!-- </form> -->

                    <h1 id="ciudadPrueba" class="text-white">prueba</h1>
                </div>
            </div>
        </div>

    </div>


<script src="js/clima.js"></script>
</body>

</html>