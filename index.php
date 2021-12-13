<?php
require_once "db_connect.php";
$nome1 = "Adelano". "<br>" ;


/*if (isset($_GET['txtid'])):
    $id = $_GET['txtid'];

else:
    $id = 1;

endif;
*/
$id = $_GET['txtid'] ?? 1;


$sql = "SELECT * FROM pessoas where id = '$id' ";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

//var_dump($dados);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $nome1?></h1>
    <form action="index.php" method="get">
        <input type="text" name="txtid" id="txtid" ><br><br>
        <input type="submit" value="Pesquisar">
    </form>
    <hr>
    <?php
    echo $dados['nome']?? "". "<br>";
    echo $dados['profissao']??"";
    ?>      



</body>
</html>
<?php
mysqli_close($connect);
?>