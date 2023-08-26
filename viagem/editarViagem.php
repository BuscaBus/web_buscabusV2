<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM viagem WHERE id_viagem = '$id'");
$dados = mysqli_fetch_array($sql_editar);
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
            VIAGEM <br>
            <input id="input1" type="text" name="viagem" value = '<?=$dados[2]?>'> <br>
            <br>
            PARTIDA <br>
            <input id="input1" type="text" name="partida" value = '<?=$dados[3]?>'> <br>
            <br>
            SENTIDO <br>
            <input id="input1" type="text" name="sentido" value = '<?=$dados[4]?>' disabled> <br>
            <br>            
            <input type="submit" value="ATUALIZAR"> <br>
            <br>
            <a href ="../linha/listarLinhas.php"> VOLTAR </a> <br>            
        </form>
    </div>    
      
</body>
</html>