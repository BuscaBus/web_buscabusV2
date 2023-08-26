<?php

include_once('../conexao.php');

$filtro_sql = "";

if($_POST != NULL){
    $filtro_select = $_POST["filtro_select"];
    $filtro_sql = "WHERE tipo_tarifa = '$filtro_select'";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Linhas</title>
    <link rel="stylesheet" href="../estilo.css">   

    <style>
        #td1{
            width: 75px;
            text-align: center;
        }
        #td2{
            width: 300px;
        }
        #td3{
            width: 120px;
        }
        #select{
            width: 250px;
            font-family: sans-serif;
        }
    </style>
    
</head>
<body>   
    <h1>LISTA DE TARIFAS</h1>
    <div>
    <a href ="cadastrarTarifa.php">CADASTRAR TARIFA</a> <br>
    <hr>  
    <br>
    <form method = "POST" class="font-form">
        Pesquisar: 
            <select name="filtro_select" id="select">
            <?php
                echo '<option value="'.$filtro_select.'" disabled selected>'.((empty($filtro_select)) ? "Selecione o tipo de tarifa" : $filtro_select).'</option>';

                $sql = "SELECT id_tarifa, tipo_tarifa, data_vigencia FROM tarifa";
                $result = $mysqli->query($sql);

                while($empresa = mysqli_fetch_array($result)){
                echo "<option value='".$empresa['tipo_tarifa']."'>".$empresa['tipo_tarifa']."</option>";
                }
            ?>
             <input type = "submit" value = "BUSCAR"/> <br>          
            </select> 
            <br>
    </form>    
    <br>
    <table rules>
        <thead>
            <tr>
                <th>TARIFA</th>
                <th>TIPO</th>
                <th>ATUALIZAÇÃO</th>
                <th colspan="3">AÇÃO</th>
            </tr>
        </thead>
        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM tarifa $filtro_sql ORDER BY tipo_tarifa ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){            
            ?> 
            <tr>
                <td id="td1"> <?=$dados[1]?></td>
                <td id="td2"> <?=$dados[2]?></td>
                <td id="td3"> <?=$dados[3]?></td>
                <td> <a href = "editarTarifa.php?id=<?=$dados[0]?>">EDITAR </a> </td>
                <td> <a href = "excluirTarifa.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>                
            </tr>   
            <?php } ?>           
        </tbod>           
    </table>
        <br>        
        <tr> <td> Total de tarifas cadastradas: <?=$total_reg?> </td> </tr>
        <hr>
        <a href ="../principal.php"> VOLTAR </a> <br>
        <br>
        <a href ="../index.html"> SAIR</a>    
    </div>
</body>
</html>