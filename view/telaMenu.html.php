<!DOCTYPE html>
<html lang="pt-br">

<?php

session_start();
$id_usuario = $_SESSION["id_cliente"];
?>

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
                            <a href="cadastroAmigos.html.php" class="btnIndexMenu">Cadastre Novos Amigos</a>
                        </li>
                        <li>
                            <a href="../model/logout.php" class="btn-flat btnLight hide-on-small-only">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


<!-- <section class="section center">
    <div class="container">
        <div class="row">
            <div class="col s12 m4" id="listarClientes">
                <a href="../view/listarAmigos.html.php">
                    <div class="card-panel z-depth-3 cardZoom grey-text text-darken-4 hoverable">
                        <h5>Listar Clientes</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->
<div class="container"><br>
    <div class="row">
        <div class="col s12">
            <ul id="tabs-swipe-demo" class="tabs">
                <li class="tab col s3"><a class="active" href="#listarAmigos">Listar Amigos</a></li>
                <li class="tab col s3"><a href="#test-swipe-2">Test 2</a></li>
                <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
            </ul>

            <div id="listarAmigos" class="col s12">
                <div class="container">
                    <h4 class="center">Listagem de amigos</h4><br>
                    <table class="highlight centered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Apelido</th>
                                <th>Aniversário</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Telefone</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            require_once '../conexao/conexao.php';

                            $conn = new conexao();
                            $query_select = "SELECT * FROM amigos WHERE fk_id_cliente = $id_usuario ORDER BY id_amigo DESC";

                            $result_query = $conn->getConn()->prepare($query_select);
                            $result_query->execute();

                            while ($listar = $result_query->fetch(PDO::FETCH_ASSOC)) {

                            ?>

                                <tr>
                                    <td>
                                        <?php echo $listar['nome']; ?>
                                    </td>
                                    <td>
                                        <?php echo $listar['username']; ?>
                                    </td>
                                    <td>
                                        <?php echo date('d/m/Y', strtotime($listar['aniversario'])) ?>
                                    </td>
                                    <td>
                                        <?php echo $listar['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $listar['celular']; ?>
                                    </td>
                                    <td>
                                        <?php echo $listar['telefone']; ?>
                                    </td>
                                    <td>
                                        <a href="../view/alterarAmigo.html.php?id=<?php echo $listar['id_amigo']; ?>" class="btn-floating btn-flat waves-effect waves-light blue lighten-3"><i class="material-icons">edit</i></a>
                                    </td>
                                    <td>
                                        <a href="../model/deletarAmigo.php?id=<?php echo $listar['id_amigo']; ?>" class="btn-floating btn-flat waves-effect waves-light red darken-4"><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="test-swipe-2" class="col s12 red">Test 2</div>
            <div id="test-swipe-3" class="col s12 green">Test 3</div>
        </div>
    </div>
</div>

<script type="javascript" src="../js/cadastroGeral.js"></script>

<script>
    $(document).ready(function() {
        $('.tabs').tabs();
    });
</script>

</html>