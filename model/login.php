<?php

require_once '../conexao/conexao.php';

class Usuario{

    public function login($email,$senha){

        $conn = new conexao();

        $query_select = "SELECT id_cliente,email,senha FROM clientes WHERE email = :email AND senha = :senha";
        $resultado = $conn->getConn()->prepare($query_select);
        $resultado->bindValue(":email",$email);
        $resultado->bindValue(":senha",$senha);
        $resultado->execute();

        $dados = $resultado->fetch(PDO::FETCH_ASSOC);

        if ($resultado->rowCount() > 0) {
            echo "<script>alert('Usuário logado com sucesso');
            window.location='../view/telaMenu.html.php'
            </script>";
            
            session_start();
            $_SESSION["id_cliente"] = $dados["id_cliente"];
        } else {
         echo "<script>alert('ERRO: Usuário não logado');
         window.location='../view/login.html.php'
         </script>";
        }
    }
}

?>