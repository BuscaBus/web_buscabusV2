<?php

include_once("../conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../estilo.css">  

    <style>
       #input{
        width: 300px;
       }
    </style>

</head>
<body>
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>    
    <h2>Cadastrar Ponto</h2>
        <form action="atualizarPonto.php" method="post">
            CÓDIGO <br>
            <input  id="input" type="text" name="codigo"> <br>
            <br>
            PONTO <br>
            <input id="input" type="text" name="ponto"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>
            <br>
            <a href ="listarPonto.php"> VOLTAR </a> <br>            
        </form>
    </div>       
 
</body>
</html>