<?php
//  php [options] -S addr:port [-t docroot]
// $con = new PDO("mysql:host=localhost;dbname=exercicio", "root", "senha");
$dsn = 'mysql:host=localhost;dbname=EXEMPLO';
$usuario = 'webmaster';
$senha = 'Ponks2021';


try {
    $conexao = new PDO($dsn, $usuario, $senha);

    $query = '
        INSERT INTO tb_usuarios(
            nome, email, senha
        ) values (
            "Celio Iyama", "celio@teste.com.br", "123456"
        )
    ';

    $retorno = $conexao->exec($query);
    echo $retorno;

    // $query = '
    //     CREATE TABLE IF NOT EXISTS tb_usuarios(
    //         id int not null primary key auto_increment,
    //         nome varchar(50) not null,
    //         email varchar(100) not null,
    //         senha varchar(32) not null
    //     )
    // ';
    // $retorno = $conexao->exec($query);

    // echo $retorno;




} catch (PDOException $exc) {
    echo "  Codigo: " . $exc->getCode(). "<br />Mensagem: " . $exc->getMessage();
    // echo '<pre>';
    // print_r($exc);
    // echo '</pre>';
}

?>