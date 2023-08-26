<?php

include_once('../conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="../estilo.css">

    <style>
        #td{
            width: 100px;
        }
    </style>
  
</head>
<body>
    <h1>USUÁRIOS CADASTRADOS</h1>
    <hr>
    <br>  
    <div> 
    <table>
        <thead>
            <tr>
                <th>USUÁRIOS</th>
                <th>SENHA</th>
                <th colspan="2">AÇÕES</th>              
            </tr>
        </thead>

        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM usuario");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            ?> 

            <tr>
                <td id="td"> <?=$dados[1]?></td>
                <td id="td"> <?=$dados[2]?></td>
                <td> <a href = "editarUsuario.php?id=<?=$dados[0]?>">EDITAR </a> </td>
                <td> <a href = "excluirUsuario.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>
            </tr> 
            <?php } ?>           
        </tbod>
           
    </table>
        <br>        
        <tr> <td> Total de usuários cadastrados: <?=$total_reg?> </td> </tr>

        <hr>

        <a href ="../principal.php"> VOLTAR </a> <br>
        <br>
        <a href ="../index.html"> SAIR</a>    
    </div>     
        
</body>
</html>