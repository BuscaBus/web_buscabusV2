<?php

include_once('../conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Linhas</title>
    <link rel="stylesheet" href="../estilo.css">   

    <style>
        #td1{
            width: 200px;
        }
        #td2{
            width: 200px;
        }
        #td3{
            width: 200px;
        }
        #select{
            width: 250px;
            font-family: sans-serif;
        }
    </style>
    
</head>
<body>   
    <h1>LISTA DE EMPRESAS</h1>
    <div>
    <a href ="cadastrarEmpresa.html">NOVA EMPRESA </a> <br>
    <hr>  
    <br>
    <table rules>
        <thead>
            <tr>
                <th>EMPRESA</th>
                <th>CIDADE</th>
                <th>SITE</th>
                <th colspan="2">AÇÃO</th>
            </tr>
        </thead>

        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM empresa");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
            ?> 

            <tr>
                <td id="td1"> <?=$dados[1]?></td>
                <td id="td2"> <?=$dados[2]?></td>
                <td id="td2"> <?=$dados[3]?></td>
                <td> <a href = "editarEmpresa.php?id=<?=$dados[0]?>">EDITAR </a> </td>
                <td> <a href = "excluirEmpresa.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>                
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
        <br>        
        <tr> <td> Total de empresas cadastradas: <?=$total_reg?> </td> </tr>
        <hr>
        <a href ="../principal.php"> VOLTAR </a> <br>
        <br>
        <a href ="../index.html"> SAIR</a>    
    </div>
</body>
</html>