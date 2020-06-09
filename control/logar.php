<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    require_once '../conexao/conexao.php';
    require_once '../model/login.php';

    $usuario = new Usuario();
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $usuario->login($email,$senha);

} else {
    
}


?>