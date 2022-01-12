<?php
session_start();
require_once "db_connect.php";


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pessoas</title>
</head>
<body>
    <h1>Adicionar Pessoas</h1>
    <form action="php_actions/adicionarPessoa.php" method="post">
        Nome:<input type="text" name="nome" id="nome"> <br> <br>
        Profissão:<input type="text" name="profissao" id="profissao"> <br><br>
        Data de Nascimento: <input type="date" name="datanascimento" id="datanascimento"> <br><br>
        Peso:<input type="text" name="peso" id="peso"> <br> <br>
        Altura:<input type="text" name="altura" id="altura"> <br> <br>
        Nacionalidade:<input type="text" name="nacionalidade" id="nacionalidade"> <br> <br>
        Sexo: <select name="sexo" id="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select> <br> <br>
        <input type="submit" value="Adicionar" name="adicionar">
    </form>

    
</body>
</html>