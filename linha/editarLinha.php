<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM linha WHERE id_linha = '$id' ");
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
        #select{
            width: 300px;
        }
        #input{
            width: 300px;
        }
       
    </style>

</head>
<body>
    
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>
    <h2>Editar Linha</h2>
        <form action="atualizarLinha.php" method="post">
            <input type="hidden" name="id" value = '<?=$dados[0]?>'>
            CÓDIGO <br>
            <input id="input" type="text" name="codigo" value = '<?=$dados[1]?>'> <br>
            <br>
            LINHA <br>
            <input id="input" type="text" name="linha" value = '<?=$dados[2]?>'> <br>
            <br>
            TIPO <br>
            <input id="input" type="text" name="tipo" value = '<?=$dados[3]?>' disabled> <br>
            <br>
            <input type="submit" value="ATUALIZAR"> <br> 
            <br>
            <a href ="listarLinhas.php"> VOLTAR </a> <br>             
        </form>
    </div>   
      
</body>
</html>