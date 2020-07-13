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
    <title>Tela Menu</title>
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

<div class="container"><br>
    <div class="row">

        <div id="listarAmigos" class="col s12">
            <h4 class="center">Listagem de amigos</h4><br>
            <table class="highlight centered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th>Aniversário</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Cidade</th>
                        <th></th>
                        <th></th>
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
                                <?php echo $listar['cidade']; ?>
                            </td>
                            <td>
                                <a href="../view/alterarAmigo.html.php?id=<?php echo $listar['id_amigo']; ?>" class="btn-floating btn-flat waves-effect waves-light blue lighten-3 tooltipped" data-position="left" data-tooltip="Alterar"><i class="material-icons">edit</i></a>
                            </td>
                            <td>
                                <a href="../model/deletarAmigo.php?id=<?php echo $listar['id_amigo']; ?>" class="btn-floating btn-flat waves-effect waves-light red darken-4 tooltipped" data-position="right" data-tooltip="Excluir"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<section class="floating-buttons">
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red lighten-1">
            <i class="large material-icons">search</i>
        </a>
        <ul>
            <li><a href="#modalPesquisarCidade" class="modal-trigger btn-floating indigo darken-3"><i class="material-icons">room</i></a></li>
            <li><a href="#modalPesquisarNome" class="modal-trigger btn-floating grey"><i class="material-icons">contacts</i></a></li>
        </ul>
    </div>
</section>

<div id="modalPesquisarNome" class="modal">
    <div class="modal-content">
        <h4 class="center">Pesquisa por nome</h4><br>
        <form action="pesquisarNome.html.php" method="POST">
            <div class="input-field col s12 m3 l4">
                <i class="material-icons prefix dark">account_circle</i>
                <input name="nome" id="nome" type="text" placeholder="Digite o nome" class="inputDark">
                <label id="lbl" for="first_name">Digite o Nome</label>
            </div>
            <div class="input-field right">
                <button name="btncadastrar" id="fomrCadastro" type="submit" class="btn-flat btnDark"><i class="material-icons">search</i> Pesquisar</button>
            </div>
        </form>
    </div>
</div>

<div id="modalPesquisarCidade" class="modal">
    <div class="modal-content">
        <h4 class="center">Pesquisa por cidade</h4><br>
        <form action="pesquisarCidades.html.php" method="POST">
            <div class="input-field col s12 m12 l12 validate">
                <select name="cidade">
                    <option value="" disabled selected>Selecionar a cidade</option>
                    <?php

                    $conn = new conexao();
                    $query = "SELECT cidade FROM amigos WHERE fk_id_cliente = $id_usuario GROUP BY cidade";

                    $result = $conn->getConn()->prepare($query);
                    $result->execute();

                    while ($cidade = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <option value=""><?php echo $cidade["cidade"]?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="input-field right">
                <button name="btncadastrar" id="fomrCadastro" type="submit" class="btn-flat btnDark"><i class="material-icons">search</i> Pesquisar</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.tabs').tabs();
    });
    $(document).ready(() => {
        $('.tooltipped').tooltip()
    });

    $(document).ready(() => {
        $('select').formSelect()
    });

    $(document).ready(() => {
        $('.fixed-action-btn').floatingActionButton()
    });

    $(document).ready(() => {
        $('.modal').modal()
    });
</script>

</html>