<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM tarifa WHERE id_tarifa = '$id' ");
$dados = mysqli_fetch_array($sql_editar);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Nova Linha</title>
    <link rel="stylesheet" href="../estilo.css">

    <style>
        #select{
            width: 200px;
        }
        #input{
            width: 200px;
        }
       
    </style>
</head>

<body>
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>
        <h2>Editar tarifa</h2>          
        <form action="atualizarTarifa.php" method="post">
            <input type="hidden" name="id" value = '<?=$dados[0]?>'>
            VALOR<br>
            <input id="input" type="text" name="valor" value = '<?=$dados[1]?>'> <br>
            <br>
            TIPO<br>
            <input id="input" type="text" name="tipo" value = '<?=$dados[2]?>' disabled> <br>
            <br>
            DATA DE VIGÊNCIA<br>
            <input id="input" type="date" name="data" value = '<?=$dados[3]?>'> <br>
            <br>
            <input type="submit" value="ATUALIZAR"> <br> 
            <br>
            <a href ="listarTarifa.php"> VOLTAR </a> <br>               
        </form>
    </div>    
</body>

</html>