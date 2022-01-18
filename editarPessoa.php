<?php
session_start();
require_once "db_connect.php";

$id = $_GET['id'];

$sql = "SELECT * from pessoas where id='$id'";

$result = mysqli_query($connect,$sql);

$userDados = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoas</title>
</head>
<body>
    <h1>Editar Pessoa</h1>
    <form action="php_actions/editarPessoa.php" method="post">
        Nome:<input type="text" name="nome" id="nome" value="<?php echo $userDados['nome'];?>"> <br> <br>
        Profissão:<input type="text" name="profissao" id="profissao" value="<?php echo $userDados['profissao'];?>"> <br><br>
        Data de Nascimento: <input type="date" name="datanascimento" id="datanascimento" value="<?php echo $userDados['nascimento'];?>"> <br><br>
        Peso:<input type="text" name="peso" id="peso" value="<?php echo $userDados['peso'];?>"> <br> <br>
        Altura:<input type="text" name="altura" id="altura" value="<?php echo $userDados['altura'];?>"> <br> <br>
        Nacionalidade:<input type="text" name="nacionalidade" id="nacionalidade" value="<?php echo $userDados['nacionalidade'];?>"> <br> <br>
        <input type="hidden" name="id" value="<?php echo $userDados['id'] ?>">
        Sexo: <select name="sexo" id="sexo">
            <option value="M"<?php echo $userDados['sexo']=='M'?'selected':''?>>Masculino</option>
            <option value="F"<?php echo $userDados['sexo']=='F'?'selected':''?>>Feminino</option>
        </select> <br> <br>
        <input type="submit" value="Editar" name="adicionar">
    </form>

    
</body>
</html>