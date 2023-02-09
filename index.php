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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/fb28064e11.js" crossorigin="anonymous"></script>

    <title>Ivan's weather app</title>
</head>

<body class="bg-dark">
    <div class="container-fluid px-0 bg-dark">

        <!-- Navbar -->
        <?php include($header) ?>

        <!-- Display info -->
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center flex-column p-4">
                <!-- Input -->
                <div class="display-5 text-white text-center">Clima el dia de hoy</div>
                <div class="col d-flex justify-content-center">
                    <div class="input-group w-25 p-3">
                        <input id="ZipCode" type="text" class="form-control" placeholder="Escribe tu código postal" aria-label="Codigo Postal">
                        <button id="botonCiudad" class="btn btn-light btn-outline-success" type="">Enviar</button>
                    </div>
                </div>
            </div>

            <!-- Display clima -->
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <!-- Carta de clima -->
                    <div class="card w-50">
                        <div class="row g-0">
                            <!-- <div class="col-md-4">
                                <img src=""  alt="ClimaIcono" id="Icono_Clima">K
                            </div> -->
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title display-6" id="Ciudad_Nombre"></h5>
                                    <div class="d-flex align-items-center">
                                    <img src="" alt="ClimaIcono" id="Icono_Clima">
                                    <span class="card-text display-6" id="Temperatura_Ciudad"></span>
                                    </div>
                                    <p class="card-text fs-3" id="Sensacion_Clima"></p>
                                    <!-- <p class="card-text" id="Maxima_Ciudad"></p>
                                    <p class="card-text" id="Minima_Ciudad"></p>
                                    <p class="card-text" id="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/clima.js"></script>
</body>
<footer class="bg-dark" style="margin-top: 150px;">
    <p class="text-center text-white fs-5">Made by Iván Rodríguez</p>
    <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-lg btn-dark"><i class="fa-brands fa-github"></i></button>
    </div>
</footer>

</html>