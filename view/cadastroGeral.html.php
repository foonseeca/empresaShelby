<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../css/default.css">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="red lighten-1">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="brand-logo" href="login.html.php">
                            <i class="fas fa-drafting-compass"></i>
                            <span class="hide-on-med-and-down">Shelby Ltda &copy;</span>
                        </a>
                        <a data-target="mobile-nav" class="sidenav-trigger">
                            <i class="material-icons">clear_all</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a href="login.html.php" class="btnIndexMenu">Voltar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header><br><br>

    <div class="container">
        <h4>Cadastre-se</h4><br>
        <form name="frmcpf" action="../model/cadastroGeral.php" method="POST">
            <div class="row">
                <div class="input-field col s12 m3 l3">
                    <i class="material-icons prefix dark">account_circle</i>
                    <input name="nome" id="nome" type="text" placeholder="Digite seu nome" class="inputDark">
                    <label id="lbl" class="active" for="first_name">Nome</label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <i class="material-icons prefix dark">mail_outline</i>
                    <input name="email" id="email" type="text" placeholder="thomas_shelby@exemplo.com" class="inputDark">
                    <label id="lbl" class="active" for="first_name">Email</label>
                </div>
                <div class="input-field col s12 m2 l2">
                    <i class="material-icons prefix dark">security</i>
                    <input name="senha" id="senha" type="password" placeholder="*********" class="inputDark">
                    <label id="lbl" class="active" for="first_name">Senha</label>
                </div>
                <div class="input-field col s12 m2 l2">
                    <i class="material-icons prefix dark">smartphone</i>
                    <input name="celular" id="celular" type="text" placeholder="(11) 97765-3360" data-mask="(00) 00000-0000" class="inputDark">
                    <label id="lbl" class="active" for="first_name">Celular</label>
                </div>
                <div class="input-field col s12 m2 l2">
                    <i class="material-icons prefix dark">call</i>
                    <input name="telefone" id="telefone" type="text" placeholder="(11) 4002-8922" data-mask="(00) 0000-0000" class="inputDark">
                    <label id="lbl" class="active" for="first_name">Telefone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m3 l2">
                    <i class="material-icons prefix dark">location_on</i>
                    <input name="cep" id="cep" placeholder="ex: 08574-150" type="text" class="inputDark" data-mask="00000-000" onblur="pesquisacep(this.value);">
                    <label id="lbl" class="active" for="first_name">CEP</label>
                </div>
                <div class="input-field col s10 m2 l2">
                    <input id="cidade" name="cidade" type="text" class="inputDark">
                    <label id="lbl" class="active" for="first_name">Cidade</label>
                </div>
                <div class="input-field col s10 m2 l2">
                    <input id="bairro" name="bairro" type="text" class="inputDark">
                    <label id="lbl" class="active" for="first_name">Bairro</label>
                </div>
                <div class="input-field col s10 m2 l3">
                    <input id="rua" name="rua" type="text" class="inputDark">
                    <label id="lbl" class="active" for="first_name">Rua</label>
                </div>
                <div class="input-field col s10 m1 l1">
                    <input name="numero" id="numero" type="text" placeholder="ex: 160" class="inputDark ">
                    <label id="lbl" class="active" for="first_name">Nº</label>
                </div>
                <div class="input-field col s10 m2 l2">
                    <input name="complemento" id="complemento" type="text" placeholder="ex: bloco 7 apto 10" class="inputDark ">
                    <label id="lbl" class="active" for="first_name">Complemento</label>
                </div>
            </div>
            <div class="input-field right">
                <button name="btncadastrar" id="fomrCadastro" type="submit" class="btn-flat btnDark"><i class="material-icons">send</i> Cadastrar</button>
            </div>
        </form>
    </div>
</body>

<script src="../js/cep.js"></script>
<script src="../js/verificarCpf.js"></script>
<script src="../js/cadastroGeral.js"></script>
<script src="../js/jquery.mask.min.js"></script>

</html>