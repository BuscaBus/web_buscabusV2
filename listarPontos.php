<?php

include_once('conexao.php');

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM viagens WHERE id_viagem = '$id' ");
$dados = mysqli_fetch_array($sql_editar);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pontos</title>
    <link rel="stylesheet" href="./estilo.css">   

    <style>
        #input{
            width: 250px;
        }
        #th1{
            width: 65px;
        }
        #th2{
            width: 75px;
        }
        #th3{
            width: 350px;
        }
        #th4{
            width: 80px;
        }
    </style>
    
</head>
<body>
    <h1>LISTA DE PONTOS</h1>
    <div>
    <a href ="cadastrarPonto.php?id=<?=$dados[0]?>"> NOVO PONTO </a> <br>
    <hr>          
    VIAGEM <br><br>
    <input id="input" type="text" name="viagem" value = '<?=$dados[2]?>'> <br><br>
    <br>
    <table>
        <thead>
            <tr>
                <th id="th1">ORDEM</th>
                <th id="th2">CODIGO</th>
                <th id="th3">PONTO</th>  
                <th id="th4">AÇÃO</th>                
            </tr>
        </thead>

        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM pontos WHERE viagem = '$dados[2]' ORDER BY ordem ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
            ?> 

            <tr>
                <td> <?=$dados[2]?></td>
                <td> <?=$dados[3]?></td>
                <td> <?=$dados[4]?></td>
                <td> <a href = "excluirPonto.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>
                
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
        <br>        
        <tr> <td> Total de pontos cadastrados nesse sentido: <?=$total_reg?> </td> </tr>
        <hr>
        <a href ="listarLinhas.php"> VOLTAR </a> <br>
        <br>
    </div>    
        
</body>
</html>