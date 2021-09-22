<?php
//  php [options] -S addr:port [-t docroot]
// $con = new PDO("mysql:host=localhost;dbname=exercicio", "root", "senha");

use function PHPSTORM_META\type;

$dsn = 'mysql:host=localhost;dbname=EXEMPLO';
$usuario = 'webmaster';
$senha = 'Ponks2021';


try {
    $conexao = new PDO($dsn, $usuario, $senha);

    $query = '
        SELECT * FROM tb_usuarios where id = 8
    ';

    $stmt = $conexao->query($query); /* o query no pdo busca uma lista (array) */
    $usuario = $stmt->fetch(PDO::FETCH_OBJ); /* fetch retorna uma tupla */
   
    echo '<pre>';
    print_r($usuario);
    echo '</pre>';
    echo '<hr>';
    echo $usuario->nome;


} 
catch (PDOException $exc) {
    echo "  Codigo: " . $exc->getCode(). "<br />Mensagem: " . $exc->getMessage();
    // echo '<pre>';
    // print_r($exc);
    // echo '</pre>';
}

?>