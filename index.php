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

<body>
    <div class="container-fluid">

        <!-- Navbar -->
        <?php include($header) ?>

        <!-- Display info -->
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-6">
                    <img src="https://cdn-icons-png.flaticon.com/512/1163/1163661.png" alt="" width="200" height="200">
                </div>
                <div class="col-6">
                    <!-- Input -->
                    <div class="display-5 text-white">Clima el dia de hoy</div>
                    <div class="row">
                        <div class="input-group bg-danger">
                            <div class="col">
                                <input id="ZipCode" type="text" class="form-control" placeholder="Escribe tu código postal" aria-label="Codigo Postal">
                                <button id="botonCiudad" class="btn btn-light btn-outline-success" type="">Enviar</button>
                            </div>
                        </div>
                    </div>

                    <!-- Carta de clima -->
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" id="Ciudad_Nombre"></h5>
                                    <p class="card-text" id="Temperatura_Ciudad"></p>
                                    <p class="card-text" id="Sensacion_Clima"></p>
                                    <p class="card-text" id ="Maxima_Ciudad"></p>
                                    <p class="card-text" id ="Minima_Ciudad"></p>
                                    <p class="card-text" id ="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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

</html>