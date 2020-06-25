<?php

if (isset($_POST['email']) && isset($_POST['senha'])) {

    require_once '../conexao/conexao.php';
    require_once '../model/login.php';

    $usuario = new Usuario();
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $usuario->login($email,$senha);

} else {
    echo "<script>alert('Ops, houve algum erro, tente novamente')
    history.back()</script>";
}


?>