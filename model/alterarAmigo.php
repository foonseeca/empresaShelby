<?php

require_once '../conexao/conexao.php';

$conn = new conexao();

$nome = $_POST["nome"];
$username = $_POST["apelido"];
$data_nascimento = $_POST["aniversario"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$cidade = $_POST["cidade"];
$id_amigo = $_POST["id_amigo"];

if(isset($_POST['editar'])){

    $data = str_replace('-','/', $data_nascimento);
    $aniversario = date('Y-m-d', strtotime($data));

    $query_update = "UPDATE amigos SET nome=:nome, username=:username, aniversario=:aniversario, email=:email, celular=:celular, cidade=:cidade WHERE id_amigo=:id_amigo";
    $resultado = $conn->getConn()->prepare($query_update);
    $resultado->bindParam(':nome', $nome);
    $resultado->bindParam(':username', $username);
    $resultado->bindParam(':aniversario', $aniversario);
    $resultado->bindParam(':email', $email);
    $resultado->bindParam(':celular', $celular);
    $resultado->bindParam(':cidade', $cidade);
    $resultado->bindParam(':id_amigo', $id_amigo);

    if ($resultado->execute()) {
        echo "<script>alert('Dados Alterados com Sucesso');
        location.href='../view/telaMenu.html.php'</script>";
    } else {
        echo "<script>alert('Dados não Alterados');
        location.href='../view/telaMenu.html.php';</script>";
    }
}else{
    echo "<script>alert('Erro no banco de dados')
    location.href='../view/telaMenu.html.php';</script>";
}
