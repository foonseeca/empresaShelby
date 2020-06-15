<?php

require_once '../conexao/conexao.php';

$conn = new conexao();

if(isset($_POST['editar'])){

    $query_update = "UPDATE clientes SET nome=:nome, email=:email, senha=:senha, celular=:celular, cep=:cep, cidade=:cidade, bairro=:bairro, rua=:rua, numero=:numero, complemento=:complemento WHERE id_cliente=:id_cliente";
    $resultado = $conn->getConn()->prepare($query_update);
    $resultado->bindParam(':nome', $_POST['nome']);
    $resultado->bindParam(':email', $_POST['email']);
    $resultado->bindParam(':senha', $_POST['senha']);
    $resultado->bindParam(':celular', $_POST['celular']);
    $resultado->bindParam(':cep', $_POST['cep']);
    $resultado->bindParam(':cidade', $_POST['cidade']);
    $resultado->bindParam(':bairro', $_POST['bairro']);
    $resultado->bindParam(':rua', $_POST['rua']);
    $resultado->bindParam(':numero', $_POST['numero']);
    $resultado->bindParam(':complemento', $_POST['complemento']);
    $resultado->bindParam(':id_cliente', $_POST['id_cliente']);

    if ($resultado->execute()) {
        echo "<script>alert('Dados Alterados com Sucesso');
        location.href='../view/telaMenu.html.php'</script>";
    } else {
        echo "<script>alert('Dados não Alterados');
        location.href='../view/telaMenu.html.php';</script>";
    }
    

}else{
    echo "<script>alert('Erro no banco de dados')</script>";
}

?>