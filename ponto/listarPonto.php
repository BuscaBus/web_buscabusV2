<?php

include_once('../conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pontos</title>
    <link rel="stylesheet" href="../estilo.css">   

    <style>
        #input{
            width: 250px;
        }
        #th1{
            width: 100px;
        }
        #th2{
            width: 300px;
        }
        #th3{
            width: 200px;
        }
        #th4{
            width: 200px;
        }
        #th5{
            width: 150px;
        }
    </style>
    
</head>
<body>
    <h1>LISTA DE PONTOS</h1>
    <div>
    <a href ="cadastrarPonto.php"> NOVO PONTO </a> <br>
    <hr>          
    <br>
    <table>
        <thead>
            <tr>
                <th id="th1">CODIGO</th>
                <th id="th2">ENDEREÇO</th>
                <th id="th3">BAIRRO</th>
                <th id="th4">CIDADE</th>    
                <th id="th5">AÇÃO</th>                
            </tr>
        </thead>

        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM ponto ORDER BY id_ponto ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
            ?> 

            <tr>
                <td> <?=$dados[0]?></td>
                <td> <?=$dados[1]?></td>
                <td> <?=$dados[2]?></td>
                <td> <?=$dados[3]?></td>
                <td> <a href = "excluirPonto.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>
                
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
        <br>        
        <tr> <td> Total de pontos cadastrados nesse sentido: <?=$total_reg?> </td> </tr>
        <hr>
        <a href ="../principal.php"> VOLTAR </a> <br>
        <br>
    </div>    
        
</body>
</html>