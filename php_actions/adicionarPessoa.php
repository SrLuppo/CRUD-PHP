<?php
session_start();

require_once "../db_connect.php";


$nome = $_POST['nome'];
$profissao =  $_POST['profissao'];
$datanascimento =  $_POST['datanascimento'];
$peso = floatval($_POST['peso']) ;
$altura = floatval($_POST['altura']) ;
$nacionalidade =  $_POST['nacionalidade'];
$sexo =  $_POST['sexo'];



if (isset($_POST['adicionar'])):

    $sql = "INSERT INTO pessoas (nome, profissao, nascimento, sexo, peso, altura, nacionalidade)
    VALUES
    ('$nome', '$profissao', '$datanascimento', '$sexo', '$peso', '$altura', '$nacionalidade' )";

    if (mysqli_query($connect,$sql )):
        $_SESSION['menssagem'] = 'Adicionado com sucesso';
        header('Location: ../listaDePessoas.php');
    else:
        $_SESSION['menssagem'] = 'Erro ao adicionar';
        header('Location: ../listaDePessoas.php');
    endif;


endif;



?>