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

<?php

require_once '../conexao/conexao.php';

$conn = new conexao();

$id = $_GET['id'];
$query_select = "SELECT * FROM clientes WHERE id_cliente = :id";
$resultado = $conn->getConn()->prepare($query_select);
$resultado->bindParam(':id', $id, PDO::PARAM_INT);
$resultado->execute();
$listar = $resultado->fetch(PDO::FETCH_ASSOC);

?>

<div class="container">
    <h4>Cadastre-se</h4><br>
    <form name="frmcpf" action="../model/alterarCliente.php" method="POST">
        <input type="hidden" name="id_cliente" value="<?php echo $listar['id_cliente'];?>">
        <div class="row">
            <div class="input-field col s12 m3 l3">
                <i class="material-icons prefix dark">account_circle</i>
                <input name="nome" id="nome" type="text" value="<?php echo $listar['nome'];?>" class="inputDark">
                <label id="lbl" class="active" for="first_name">Nome</label>
            </div>
            <div class="input-field col s12 m3 l3">
                <i class="material-icons prefix dark">mail_outline</i>
                <input name="email" id="email" type="text" value="<?php echo $listar['email'];?>" class="inputDark">
                <label id="lbl" class="active" for="first_name">Email</label>
            </div>
            <div class="input-field col s12 m2 l2">
                <i class="material-icons prefix dark">security</i>
                <input name="senha" id="senha" type="text" value="<?php echo $listar['senha'];?>" class="inputDark">
                <label id="lbl" class="active" for="first_name">Senha</label>
            </div>
            <div class="input-field col s12 m2 l2">
                <i class="material-icons prefix dark">smartphone</i>
                <input name="celular" id="celular" type="text" data-mask="(00) 00000-0000" value="<?php echo $listar['celular'];?>" class="inputDark">
                <label id="lbl" class="active" for="first_name">Celular</label>
            </div>
            <div class="input-field col s12 m2 l2">
                <i class="material-icons prefix dark">call</i>
                <input name="telefone" id="telefone" type="text" data-mask="(00) 0000-0000" value="<?php echo $listar['telefone'];?>" class="inputDark">
                <label id="lbl" class="active" for="first_name">Telefone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m3 l2">
                <i class="material-icons prefix dark">location_on</i>
                <input name="cep" id="cep" type="text" class="inputDark" data-mask="00000-000" value="<?php echo $listar['cep'];?>" onblur="pesquisacep(this.value);">
                <label id="lbl" class="active" for="first_name">CEP</label>
            </div>
            <div class="input-field col s10 m2 l2">
                <input id="cidade" name="cidade" type="text" value="<?php echo $listar['cidade'];?>" class="inputDark">
                <label id="lbl" class="active" for="first_name">Cidade</label>
            </div>
            <div class="input-field col s10 m2 l2">
                <input id="bairro" name="bairro" type="text" value="<?php echo $listar['bairro'];?>" class="inputDark">
                <label id="lbl" class="active" for="first_name">Bairro</label>
            </div>
            <div class="input-field col s10 m2 l3">
                <input id="rua" name="rua" type="text" value="<?php echo $listar['rua'];?>" class="inputDark">
                <label id="lbl" class="active" for="first_name">Rua</label>
            </div>
            <div class="input-field col s10 m1 l1">
                <input name="numero" id="numero" type="text" value="<?php echo $listar['numero'];?>" class="inputDark ">
                <label id="lbl" class="active" for="first_name">Nº</label>
            </div>
            <div class="input-field col s10 m2 l2">
                <input name="complemento" id="complemento" type="text" value="<?php echo $listar['complemento'];?>" class="inputDark ">
                <label id="lbl" class="active" for="first_name">Complemento</label>
            </div>
        </div>
        <div class="input-field right">
            <button name="editar" id="fomrAlterar" type="submit" class="btn-flat btnDark"><i class="material-icons">send</i> Alterar</button>
        </div>
    </form>
</div>

<script src="../js/cep.js"></script>
<script src="../js/cadastroGeral.js"></script>
<script src="../js/jquery.mask.min.js"></script>

</html>