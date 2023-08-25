<?php

include_once("conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM viagens WHERE id_viagem = '$id'");
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
        #input1{
            width:300px;
            font-family: sans-serif;           
        }
        #input2{
            width:300px;
            font-family: sans-serif;           
        }
        #select{
            width: 300px;
            font-family: sans-serif;
        }
        #td1{
            width: 350px;
        }
        #td2{
            width: 80px;
        }
        #td3{
            width: 80px;
        }
    </style>

</head>
<body>    
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>
    <h2>Editar Viagem</h2>
        <form action="atualizarViagem.php" method="post">
            <input type="hidden" name="id" value = '<?=$dados[0]?>'>
            LINHA <br>
            <input id="input1" type="text" name="linha" value = '<?=$dados[1]?>'> <br>
            <br>
            VIAGEM <br>
            <input id="input1" type="text" name="viagem" value = '<?=$dados[2]?>'> <br>
            <br>
            SENTIDO <br>
            <input id="input1" type="text" name="sentido" value = '<?=$dados[3]?>'> <br>
            <br>
            BOX TERMINAL <br>
            <input id="input1" type="text" name="box" value = '<?=$dados[4]?>'> <br>
            <br>
            <input type="submit" value="ATUALIZAR"> <br>
            <br>
            <a href ="listarLinhas.php"> VOLTAR </a> <br>            
        </form>
    </div>    
      
</body>
</html>