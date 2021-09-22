<?php 


class Conexao {
    private $host = 'localhost';
    private $dbname = 'php_com_pdo';
    private $usuario = 'pqpdo';
    private $senha = 'Pq123456';

    public function conectar() {

        try {
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->usuario",
                "$this->senha"
            );
            
            return $conexao;
            
        } catch (PDOException $e) {
            echo  '<p> Codigo: ' . $e->getCode() .' Erro: '.$e->getMessage(). '</p>';
        }

    }
}


?>