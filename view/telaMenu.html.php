<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <link rel="stylesheet" href="../css/default.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Inicio</title>
</head>

<header>
    <div class="navbar-fixed">
        <nav class="red lighten-1">
            <div class="container">
                <div class="nav-wrapper">
                    <a class="brand-logo" href="../view/telaMenu.html.php">
                        <i class="fas fa-drafting-compass"></i>
                        <span class="hide-on-med-and-down">Agenda &copy;</span>
                    </a>
                    <a data-target="mobile-nav" class="sidenav-trigger">
                        <i class="material-icons">clear_all</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="../model/logout.php" class="btn-flat btnLight hide-on-small-only">Sair</a>
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
                <a href="../view/listarClientes.html.php">
                    <div class="card-panel z-depth-3 cardZoom grey-text text-darken-4 hoverable">
                        <h5>Listar Clientes</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<script type="javascript" src=",,/js/telaMenu.js"></script>

</html>