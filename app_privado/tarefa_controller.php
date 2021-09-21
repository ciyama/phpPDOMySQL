<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

require "../app_privado/tarefa.model.php";
require "../app_privado/tarefa.service.php";
require "../app_privado/conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ( $acao == 'inserir'){
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();
    
    header('Location: nova_tarefa.php?inclusao=1');
    // echo '<pre>';
    // print_r($tarefaService);
    // echo '</pre>';
} else if ($acao == 'recuperar'){
    // echo 'Chegamos até aqui!';
    $tarefa = new Tarefa();
    $conexao = new Conexao();

    $tarefaService = new TarefaService ($conexao, $tarefa);
    $tarefas = $tarefaService->recuperar();

} else if ($acao == 'atualizar') {
    // echo 'Estamos chegando... ja estamos no atualizar... se cuide memino(a)';
    // echo '<br>';
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $tarefa = new Tarefa();
    $tarefa->__set('id', $_POST['id']);
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService ($conexao, $tarefa);
    if ($tarefaService->atualizar()){
        header('location: todas_tarefas.php');
    }
}



?>