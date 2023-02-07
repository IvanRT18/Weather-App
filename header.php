<?php
// Inicia un nueva sesion
session_start();

?>

<nav class="navbar navbar-dark bg-info">
    <div class="container-fluid">
        <span class="navbar-brand">
            <img src="https://cdn-icons-png.flaticon.com/512/1163/1163661.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
            Ivan's weather
        </span>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Ciudad" aria-label="Search">
            <button class="btn btn-primary btn-outline-light" type="submit">Buscar</button>
        </form>
    </div>
</nav>