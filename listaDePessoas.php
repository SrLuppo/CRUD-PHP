<?php
session_start();
require_once "db_connect.php";

$sqlLista = "SELECT * FROM pessoas";
$resultadoLista = mysqli_query($connect, $sqlLista);

//teste de delete
/*$id = 
$result_usuario = "DELETE FROM pessoas WHERE pessoas.id = 9;";
$resultado_usuario = mysqli_query($connect,$result_usuario);
*/



?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>
<body>
<?php include_once "menu.php" ?>

    <h1>Lista de Pessoas</h1>
     
    <table border="2px"> <!-- Usamos uma tag obsoleta para didatica-->
        <thead>
            <tr>
                <th>Nome</th>
                <th>Profissão</th>
                <th>Data de Nascimento</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Nacionalidade</th>
                <th>sexo</th>
            </tr>
        </thead>
        
        </tbody>
        
                
            <?php
                 while  ($dados = mysqli_fetch_array($resultadoLista)):
                   /* if ($dados['sexo'] == 'M' ) {
                        $sexo = 'Masculino';                        
                    }else{
                        $sexo = 'Feminino';
                    }*/
                    
            
                    echo "<tr>";
                        echo "<td> " . $dados['nome'] . " </td>";
                        echo "<td> " . $dados['profissao'] . " </td>";
                        echo "<td> " . $dados['nascimento'] . " </td>";
                        echo "<td> " . $dados['peso'] . " </td>";
                        echo "<td> " . $dados['altura'] . " </td>";
                        echo "<td> " . $dados['nacionalidade'] . " </td>";
                        echo "<td> " . ($dados['sexo'] == 'M' ? 'Masculino': 'Feminino') . " </td>";              
                        echo "<td> " ."<a href='php_actions/deleteLinha.php?id=" . $dados['id'] ."'>Apagar</a>". " </td>";
                        echo "<td> " ."<a href='editarPessoa.php?id=" . $dados['id'] ."'>Editar</a>". " </td>";
                    echo "</tr>";
                
                    endwhile;
                ?> 

                <?php 
                /*
                 while  ($dados = mysqli_fetch_array($resultadoLista)):
                    ?>
                    <tr>
                        <td>  <?php echo $dados['nome'] ?>             </td>
                        <td>  <?php echo $dados['profissao'] ?>        </td>
                        <td>  <?php echo $dados['nascimento'] ?>       </td>
                        <td>  <?php echo $dados['peso'] ?>              </td>
                        <td>  <?php echo $dados['altura'] ?>            </td>
                        <td>  <?php echo $dados['nacionalidade'] ?>     </td>
                        <td>   <a href='deleteLinha.php?id=<?php echo $dados['id'] ?>'>Apagar</a> </td>
                
                    </tr>

                 <?php
                    endwhile; 
                    */
                ?>
        
                
            
        </tbody>
    </table>
    
<script>
    
    <?php 
    if (isset($_SESSION['menssagem'])):
        ?>
       alert('<?php echo $_SESSION['menssagem'];?>')
    <?php
    endif;
    session_unset();
    session_destroy();
     ?>
</script>
    
</body>

</html>
