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
$id = $_POST['id'];



if (isset($_POST['adicionar'])):

    $sql = "UPDATE pessoas SET nome = '$nome', profissao = '$profissao', nascimento = '$datanascimento', peso ='$peso' , altura = '$altura' , nacionalidade = '$nacionalidade' , sexo = '$sexo' WHERE id ='$id'";

    if (mysqli_query($connect,$sql )):
        $_SESSION['menssagem'] = 'Editado com sucesso';
        header('Location: ../listaDePessoas.php');
    else:
        $_SESSION['menssagem'] = 'Erro ao Editar';
        header('Location: ../listaDePessoas.php');
        ECHO mysqlI_error($connect);
    endif;


endif;


?>