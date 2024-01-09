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
    <h2>Carregar Dados</h2>
        <form action="carregarDados_bd.php" method="post" enctype="multipart/form-data">
            <label>Arquivo</label>
            <input type="file" name="arquivo"> <br><br>
            <br>
            <input type="submit" value="ENVIAR"> <br>
            <br>
            <a href ="../principal.php"> VOLTAR </a> <br>            
        </form>
    </div>       
 
</body>
</html>