<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "cadastro";

$connect = mysqli_connect($serverName, $userName, $password, $db_name);

mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()):
    echo "Falha na conexão". mysqli_connect_error();
endif;
?>