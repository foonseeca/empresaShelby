<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../css/default.css">
    <title>Cadastro Geral</title>
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav class="red lighten-1">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="brand-logo" href="login.html.php">
                            <i class="fas fa-drafting-compass"></i>
                            <span class="hide-on-med-and-down">Agenda &copy;</span>
                        </a>
                        <a data-target="mobile-nav" class="sidenav-trigger">
                            <i class="material-icons">clear_all</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a href="../view/telaMenu.html.php" class="btnIndexMenu">Voltar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header><br><br>

    <div class="container">
        <h4>Cadastre Seus amigos</h4><br>
        <form action="../model/cadastrarAmigos.php" method="POST">
            <div class="row">
                <div class="input-field col s12 m3 l4">
                    <i class="material-icons prefix dark">account_circle</i>
                    <input name="nome" id="nome" type="text" placeholder="Digite o nome" class="inputDark">
                    <label id="lbl" for="first_name">Nome</label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <i class="material-icons prefix dark">account_box</i>
                    <input name="apelido" id="apelido" type="text" placeholder="Digite o Apelido" class="inputDark">
                    <label id="lbl" for="first_name">Apelido</label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <i class="material-icons prefix dark">cake</i>
                    <input name="aniversario" id="aniversario" type="tel" data-mask="00/00/0000" placeholder="05/09/2000" class="inputDark">
                    <label id="lbl" for="first_name">Aniversário</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m3 l4">
                    <i class="material-icons prefix dark">mail_outline</i>
                    <input name="email" id="email" type="email" placeholder="thomas_shelby@exemplo.com" class="inputDark">
                    <label id="lbl" for="email">Email</label>
                </div>
                <div class="input-field col s12 m2 l3">
                    <i class="material-icons prefix dark">smartphone</i>
                    <input name="celular" id="celular" type="tel" placeholder="(11) 97765-3360" data-mask="(00) 00000-0000" class="inputDark">
                    <label id="lbl" for="first_name">Celular</label>
                </div>
                <div class="input-field col s12 m2 l3">
                    <i class="material-icons prefix dark">call</i>
                    <input name="telefone" id="telefone" type="tel" placeholder="(11) 4002-8922" data-mask="(00) 0000-0000" class="inputDark">
                    <label id="lbl" for="first_name">Telefone</label>
                </div>
            </div>
            <div class="input-field right">
                <button name="btncadastrar" id="fomrCadastro" type="submit" class="btn-flat btnDark"><i class="material-icons">send</i> Cadastrar</button>
            </div>
        </form>
    </div>
</body>

<script src="../js/cep.js"></script>
<script src="../js/cadastroGeral.js"></script>
<script src="../js/jquery.mask.min.js"></script>

</html>