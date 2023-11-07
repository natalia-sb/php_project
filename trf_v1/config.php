<?php
    $host = 'Localhost';
    $user = 'root';
    $pass = '';
    $db = 'tarefas';

    $conexao = new mysqli($host, $user, $pass, $db);
/*
    if($conexao->connect_error)
    {
        echo "erro de conexao";
    }else{
        echo "conectado";
    }
*/
?>