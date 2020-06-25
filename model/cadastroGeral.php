<?php

require_once '../conexao/conexao.php';

$nome = $_POST['nome'];
$username = $_POST['username'];
$data_nascimento = $_POST['aniversario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$telefone = $_POST['telefone'];


if (($nome != "") && ($username != "") && ($email != "") && ($senha != "") && ($celular != "")) {

    //convertendo a data para cadastrar no banco
    $data = str_replace('-','/', $data_nascimento);
    $aniversario = date('Y-m-d', strtotime($data));

    $conn = new conexao();

    $query_insert = "INSERT INTO clientes (nome, username, aniversario, email, senha, celular, telefone) VALUES (:nome, :username, :aniversario, :email, :senha, :celular, :telefone)";

    $cadastrar = $conn->getConn()->prepare($query_insert);

    $cadastrar->bindParam(':nome', $nome, PDO::PARAM_STR);
    $cadastrar->bindParam(':username', $username, PDO::PARAM_STR);
    $cadastrar->bindParam(':aniversario', $aniversario, PDO::PARAM_STR);
    $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
    $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);
    $cadastrar->bindParam(':celular', $celular, PDO::PARAM_STR);
    $cadastrar->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $cadastrar->execute();

    if ($cadastrar->rowCount()) {
        echo "<script>alert('Cadastrado com sucesso');
        window.location='../view/login.html.php';</script>";
    } else {
        echo "<script>alert('Ops algo deu errado!!');
        history.back();</script>";
    }
} else {
    echo "<script>alert('Preencha os campos');
    history.back();</script>";
}
