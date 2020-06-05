<?php

require_once '../conexao/conexao.php';

$conn = new conexao();
$query_select = "SELECT * FROM clientes";

$result_query = $conn->getConn()->prepare($query_select);
$result_query->execute();

while ($listar = $result_query->fetch(PDO::FETCH_ASSOC)) {
    echo "Cliente: ".$listar["nome"]."<br>";
    echo "Data de nascimento: ".$listar["data_nascimento"]."<br>";
    echo "CPF: ".$listar["cpf"]."<br>";
    echo "Rg: ".$listar["rg"]."<br>";
    echo "Email: ".$listar["email"]."<br>";
    echo "Senha: ".$listar["senha"]."<br>";
    echo "Celular: ".$listar["celular"]."<br>";
    echo "Telefone: ".$listar["telefone"]."<br>";
    echo "CEP: ".$listar["cep"]."<br>";
    echo "Cidade: ".$listar["cidade"]."<br>";
    echo "Bairro: ".$listar["bairro"]."<br>";
    echo "Rua: ".$listar["rua"]."<br>";
    echo "Numero: ".$listar["numero"]."<br>";
    echo "Complemento: ".$listar["complemento"]."<br>";
    echo "<br>";
}

?>