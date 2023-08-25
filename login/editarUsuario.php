<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM usuario WHERE id_usuario = '$id' ");
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
</head>
<body>    
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>
    <h2>Editar Usuário</h2>
        <form action="atualizarUsuario.php" method="post">
            <input type="hidden" name="id" value = '<?=$dados[0]?>'>
             USUÁRIO <br>
            <input type="text" name="usuario" value = '<?=$dados[1]?>'> <br>
            <br>
            SENHA <br>
            <input type="password" name="senha" value = '<?=$dados[2]?>'> <br>
            <br>
            <input type="submit" value="ATUALIZAR"> <br>            
        </form>
    </div>   
</body>
</html>