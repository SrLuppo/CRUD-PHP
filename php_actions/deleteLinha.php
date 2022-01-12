<?php
session_start();

require_once "../db_connect.php";

//$sqlLista = "SELECT * FROM pessoas";
//$resultadoLista = mysqli_query($connect, $sqlLista);


$id = $_GET['id'];
$result_usuario = "DELETE FROM pessoas WHERE id='$id'";
$resultado_usuario = mysqli_query($connect,$result_usuario);
header('Location: ../listaDePessoas.php');



?>
