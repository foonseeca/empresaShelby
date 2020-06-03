<?php

class conexao{
    
    public static $user = "root";
    public static $senha = "";
    private static $conn = null;


    private  static function Conectar(){

        try {

            if(self::$conn == null)
            {
                self::$conn = new PDO('mysql:host=localhost;dbname=empresa;',
                self::$user,self::$senha);
               
            }
           
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();
            
            die;
        }
        return self::$conn;
    }
    public function getConn()
    {
        return self::Conectar();
    }
    
    
}


?>