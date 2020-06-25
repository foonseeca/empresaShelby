<?php

require_once '../conexao/conexao.php';

    $id = $_GET['id'];

    $conn = new conexao();
    $query_delete = "DELETE FROM amigos WHERE id_amigo = :id";
    $resultado = $conn->getConn()->prepare($query_delete);
    $resultado->bindParam(':id',$id);

    if ($resultado->execute()) {
        echo "<script>alert('Dados excluidos com sucesso');
        location.href='../view/telaMenu.html.php';
        </script>";
    } else {
        echo "<script>alert('Dados nao excluidos');
        location.href='../view/telaMenu.html.php'</script>"; 
    }
?>
