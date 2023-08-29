<?php

include_once("conexao.php");

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
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="./estilo.css">  

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
            <input type="hidden" name="id" value = '<?=$dados[0]?>'>
            VIAGEM <br>
            <input id="input" type="text" name="viagem" value = '<?=$dados[2]?>'> <br>
            <br>
            ORDEM <br>
            <input id="input" type="text" name="ordem"> <br>
            <br>
            CÓDIGO <br>
            <input  id="input" type="text" name="codigo"> <br>
            <br>
            PONTO <br>
            <input id="input" type="text" name="ponto"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>
            <br>
            <a href ="listarLinhas.php"> VOLTAR </a> <br>            
        </form>
    </div>       
 
</body>
</html>