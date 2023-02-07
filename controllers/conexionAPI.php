<?php

include("../models/modeloClima.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // print("Data arrived ");
    var_dump($_POST);
    var_dump($_POST["Nombre_Ciudad"]);

    $ciudad = trim($_POST["Nombre_Ciudad"]);

}
