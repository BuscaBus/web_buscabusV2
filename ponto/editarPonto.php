<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM ponto WHERE id_ponto = '$id' ");
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
       #input{
        width: 300px;
       }
    </style>

</head>
<body>
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>    
    <h2>Editar Ponto</h2>
        <form action="atualizarPonto.php" method="post">
            <input type="hidden" name="id" value = '<?=$dados[0]?>'>
            PONTO <br>
            <input  id="input" type="text" name="endereco" value='<?=$dados[1]?>'> <br>
            <br>
            BAIRRO <br>
            <input id="input" type="text" name="bairro" value='<?=$dados[2]?>' disabled> <br>
            <br>
            CIDADE <br>
            <input id="input" type="text" name="cidade" value='<?=$dados[3]?>' disabled> <br>                 
            <br>
            LATITUDE <br>
            <input id="input" type="text" name="latitude" value='<?=$dados[4]?>'> <br>
            <br>
            LONGITUDE <br>
            <input id="input" type="text" name="longitude" value='<?=$dados[5]?>'> <br>
            <br>
            <input type="submit" value="ATUALIZAR"> <br>
            <br>
            <a href ="listarPonto.php"> VOLTAR </a> <br>            
        </form>
    </div>       
 
</body>
</html>