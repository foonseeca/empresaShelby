<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
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
                        <span class="hide-on-med-and-down">Shelby Ltda &copy;</span>
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

<div class="container">
    <table class="highlight centered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Telefone</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Complemento</th>
            </tr>
        </thead>

        <tbody>
            <?php

            require_once '../conexao/conexao.php';

            $conn = new conexao();
            $query_select = "SELECT * FROM clientes";

            $result_query = $conn->getConn()->prepare($query_select);
            $result_query->execute();

            while ($listar = $result_query->fetch(PDO::FETCH_ASSOC)) {

            ?>

                <tr>
                    <td>
                        <?php echo $listar['nome'] ?>
                    </td>
                    <td>
                        <?php echo $listar['email'] ?>
                    </td>
                    <td>
                        <?php echo $listar['celular'] ?>
                    </td>
                    <td>
                        <?php echo $listar['telefone'] ?>
                    </td>
                    <td>
                        <?php echo $listar['cep'] ?>
                    </td>
                    <td>
                        <?php echo $listar['cidade'] ?>
                    </td>
                    <td>
                        <?php echo $listar['bairro'] ?>
                    </td>
                    <td>
                        <?php echo $listar['rua'] ?>
                    </td>
                    <td>
                        <?php echo $listar['numero'] ?>
                    </td>
                    <td>
                        <?php echo $listar['complemento'] ?>
                    </td>
                    <td>
                        <a href="../view/alterarCliente.html.php?id=<?php echo $listar['id_cliente'];?>" class="btn-floating btn-flat waves-effect waves-light blue lighten-3"><i class="material-icons">edit</i></a>
                    </td>
                    <td>
                        <a href="../model/deletarCliente.php?id=<?php echo $listar['id_cliente'];?>" class="btn-floating btn-flat waves-effect waves-light red darken-4"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</html>