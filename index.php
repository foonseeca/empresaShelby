<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="node_modules/materialize-css/dist/css/materialize.min.css" />
    <link rel="stylesheet" href="css/default.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Inicio</title>
</head>


<?php

    // require_once 'control/acesso.php';
    // $rota = new Acesso();
    // $rota->abrirTelaInicial();

?>

<header>
    <div class="navbar-fixed">
        <nav class="red lighten-1">
            <div class="container">
                <div class="nav-wrapper">
                    <a class="brand-logo" href="#home">
                        <i class="fas fa-drafting-compass"></i>
                        <span class="hide-on-med-and-down">Shelby Ltda &copy;</span>
                    </a>
                    <a data-target="mobile-nav" class="sidenav-trigger">
                        <i class="material-icons">clear_all</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="model/logout.php" class="btn-flat btnLight hide-on-small-only">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


<section class="section center">
    <div class="container">
        <div class="row">
            <div class="col s12 m4" id="listarClientes">
                <a href="view/listarClientes.html.php">
                    <div class="card-panel z-depth-3 cardZoom grey-text text-darken-4 hoverable">
                        <h5>Listar Clientes</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<script type="javascript" src="js/index.js"></script>

</html>