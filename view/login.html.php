<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/default.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login</title>
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
                                <a href="cadastroGeral.html.php" class="btnIndexMenu">Cadastre-se</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <div id="login" class="login">
            <form action="../control/logar.php" method="post">
                <div class="row">
                    <div class="input-field col s12 m10 l10">
                        <i class="material-icons prefix dark">mail_outline</i>
                        <input name="email" id="email" type="text" placeholder="thomas_shelby@gmail.com" class="inputDark">
                        <label id="lbl" class="active" for="first_name">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m10 l10">
                        <i class="material-icons prefix dark">security</i>
                        <input name="senha" id="senha" type="password" placeholder="**********" class="inputDark">
                        <label id="lbl" class="active" for="first_name">Senha</label>
                    </div>
                </div>
                <div class="input-field right">
                    <button name="btncadastrar" value="fomrSecretaria" id="btnFormContas" type="submit" class="btn-flat btnDark"><i class="material-icons">send</i> Continuar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>