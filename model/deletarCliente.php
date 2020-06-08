<?php

require_once '../conexao/conexao.php';

    $id = $_GET['id'];

    $conn = new conexao();
    $query_delete = "DELETE FROM clientes WHERE id_cliente = :id";
    $resultado = $conn->getConn()->prepare($query_delete);
    $resultado->bindParam(':id',$id);

    if ($resultado->execute()) {
        echo "<script>alert('Dados excluidos com sucesso');
        Location.href='index.php';
        </script>";
    } else {
        echo "<script>alert('Dados nao excluidos');
        history.back();</script>"; 
    }
?>
