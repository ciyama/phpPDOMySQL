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
        SELECT * FROM tb_usuarios
    ';

    $stmt = $conexao->query($query);
    $lista = $stmt->fetchAll(PDO::FETCH_OBJ);
    print_r(gettype($lista[2]->senha));
    echo "<br>";
    $password = intval($lista[2]->senha);
    echo gettype($password);
    echo "<br>";
    echo $password;

    echo "<br><hr><br>";
    echo '<pre>';
    print_r($lista);
    echo '</pre>';
} 
catch (PDOException $exc) {
    echo "  Codigo: " . $exc->getCode(). "<br />Mensagem: " . $exc->getMessage();
    // echo '<pre>';
    // print_r($exc);
    // echo '</pre>';
}

?>