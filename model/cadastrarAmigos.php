<?php

require_once '../conexao/conexao.php';

session_start();
$id_usuario = $_SESSION["id_cliente"];

$nome = $_POST["nome"];
$data_nascimento = $_POST["aniversario"];
$username = $_POST["apelido"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$telefone = $_POST["telefone"];

if (($nome != "") && ($email != "") && ($celular != "")) {
    
    //convertando data para cadastrar no banco
    $data = str_replace('-', '/', $data_nascimento);
    $aniversario = date('Y-m-d', strtotime($data));

    $conn = new conexao();

    $query = "INSERT INTO amigos (nome, username, aniversario, email, celular, telefone, fk_id_cliente) 
    VALUES (:nome, :username, :aniversario, :email, :celular, :telefone, :id_usuario)";

    $cadastrar = $conn->getConn()->prepare($query);

    $cadastrar->bindParam(':nome', $nome, PDO::PARAM_STR);
    $cadastrar->bindParam(':username', $username, PDO::PARAM_STR);
    $cadastrar->bindParam(':aniversario', $aniversario, PDO::PARAM_STR);
    $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
    $cadastrar->bindParam(':celular', $celular, PDO::PARAM_STR);
    $cadastrar->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $cadastrar->bindParam(':id_usuario', $id_usuario, PDO::PARAM_STR);
    $cadastrar->execute();

    if ($cadastrar->rowCount()) {
        echo "<script>alert('Amigo cadastrado com sucesso')
        window.location='../view/telaMenu.html.php'</script>";
    } else {
        echo "<script>alert('ERRO: Amigo não cadastrado')
        history.back()</script>";
    }
} else {
    echo "<script>alert('Ops! Preencha os campos')
    history.back()</script>";
}
