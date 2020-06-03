<?php
require_once '../conexao/conexao.php';

if (($_POST['nome'] != "") && ($_POST['nascimento'] != "") && ($_POST['cpf'] != "") && ($_POST['rg'] != "") && ($_POST['email'] != "") && ($_POST['senha'] != "") && ($_POST['cep'] != "") && ($_POST['numero'] != "")) {

    $conn = new conexao();

    $query_insert = "INSERT INTO clientes (nome, data_nascimento, cpf, rg, email, senha, celular, telefone, cep, cidade, bairro, rua, numero, complemento) VALUES (:nome, :nascimento, :cpf, :rg, :email, :senha, :celular, :telefone, :cep, :cidade, :bairro, :rua, :numero, :complemento)";

    $cadastrar = $conn->getConn()->prepare($query_insert);

    $cadastrar->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
    $cadastrar->bindParam(':nascimento', $_POST['nascimento'], PDO::PARAM_STR);
    $cadastrar->bindParam(':cpf', $_POST['cpf'], PDO::PARAM_STR);
    $cadastrar->bindParam(':rg', $_POST['rg'], PDO::PARAM_STR);
    $cadastrar->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $cadastrar->bindParam(':senha', $_POST['senha'], PDO::PARAM_STR);
    $cadastrar->bindParam(':celular', $_POST['celular'], PDO::PARAM_STR);
    $cadastrar->bindParam(':telefone', $_POST['telefone'], PDO::PARAM_STR);
    $cadastrar->bindParam(':cep', $_POST['cep'], PDO::PARAM_STR);
    $cadastrar->bindParam(':cidade', $_POST['cidade'], PDO::PARAM_STR);
    $cadastrar->bindParam(':bairro', $_POST['bairro'], PDO::PARAM_STR);
    $cadastrar->bindParam(':rua', $_POST['rua'], PDO::PARAM_STR);
    $cadastrar->bindParam(':numero', $_POST['numero'], PDO::PARAM_STR);
    $cadastrar->bindParam(':complemento', $_POST['complemento'], PDO::PARAM_STR);

    $cadastrar->execute();

    if ($cadastrar->rowCount()) {
        echo "<script>alert('Cadastro inserido com sucesso');
        window.location='../view/login.html.php';</script>";
    } else {
        echo "<script>alert('ERRO: Preencha os campos e tente novamente');
        history.back();</script>";
    }
} else {
    echo "<script>alert('Preencha os campos');
    history.back();</script>";
}
