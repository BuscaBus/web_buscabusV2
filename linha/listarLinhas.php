<?php

include_once('../conexao.php');

$filtro_sql = "";

if($_POST != NULL){
    $filtro_select = $_POST["filtro_select"];
    $filtro_sql = "WHERE nome_empresa = '$filtro_select'";
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
            width: 150px;
        }
        #td2{
            width: 50px;
        }
        #td3{
            width: 400px;
        }    
        #td4{
            width: 250px;    
        }
        #td5{
            width: 120px;    
        }
        #select{
            width: 250px;
            font-family: sans-serif;
        }
    </style>
    
</head>
<body>   
    <h1>LISTA DE LINHAS</h1>
    <div>
    <a href ="cadastrarLinha.php">NOVA LINHA </a> <br>
    <hr>  
    <br>
    <form method = "POST" class="font-form">
        Pesquisar: 
            <select name="filtro_select" id="select">
            <?php
                echo '<option value="'.$filtro_select.'" disabled selected>'.((empty($filtro_select)) ? "Selecione a Empresa" : $filtro_select).'</option>';

                $sql = "SELECT id_empresa, nome_empresa FROM empresa";
                $result = $mysqli->query($sql);

                while($empresa = mysqli_fetch_array($result)){
                echo "<option value='".$empresa['nome_empresa']."'>".$empresa['nome_empresa']."</option>";
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
                <th>EMPRESA</th>
                <th>CODIGO</th>
                <th>LINHA</th>
                <th>TIPO</th>
                <th>ATUALIZAÇÃO</th>
                <th colspan="3">AÇÃO</th>
            </tr>
        </thead>

        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT e.nome_empresa, Id_linha, l.cod_linha, l.nome_linha, l.tipo_linha, l.data_vigencia FROM linha AS l JOIN empresa AS e ON l.id_empresa = e.id_empresa $filtro_sql ORDER BY cod_linha ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
            ?> 
a
            <tr>
                <td id="td1"> <?=$dados[0]?></td>
                <td id="td2"> <?=$dados[2]?></td>
                <td id="td3"> <?=$dados[3]?></td>
                <td id="td4"> <?=$dados[4]?></td>
                <td id="td5"> <?=$dados[5] = date('d/m/y')?></td>
                <td> <a href = "cadastrarViagem.php?id=<?=$dados[1]?>">VIAGENS </a> </td>
                <td> <a href = "editarLinha.php?id=<?=$dados[1]?>">EDITAR </a> </td>
                <td> <a href = "excluirLinha.php?id=<?=$dados[1]?>">EXCLUIR </a> </td>                
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
        <br>        
        <tr> <td> Total de linhas cadastradas: <?=$total_reg?> </td> </tr>
        <hr>
        <a href ="../principal.php"> VOLTAR </a> <br>
        <br>
        <a href ="../index.html"> SAIR</a>    
    </div>
</body>
</html>