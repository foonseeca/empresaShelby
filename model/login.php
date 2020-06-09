<?php

require_once '../conexao/conexao.php';

class Usuario{
    public function login($email,$senha){

        $conn = new conexao();

        $query_select = "SELECT email,senha FROM clientes WHERE email = :email AND senha = :senha";
        $resultado = $conn->getConn()->prepare($query_select);
        $resultado->bindValue("email",$email);
        $resultado->bindValue("senha",$senha);
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            echo "<script>alert('usuario logado com sucesso');
            window.location='../view/telaMenu.html.php'
            </script>";
        } else {
         echo "deu  merda";
        }
        

    }
}

?>