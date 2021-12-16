<?php
require_once "db_connect.php";

$sqlLista = "SELECT * FROM pessoas";
$resultadoLista = mysqli_query($connect, $sqlLista);


$id = filter_input(INPUT_GET, 'nome', );
$result_usuario = "DELETE FROM pessoas WHERE nome='$id'";
$resultado_usuario = mysqli_query($connect,$result_usuario);




?>
