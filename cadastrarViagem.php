<?php

include_once("conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM linha WHERE id_linha = '$id'");
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
    <h2>Cadastrar Viagem</h2>
        <form action="cadastraViagem.php" method="post">
            <input type="hidden" name="id" value = '<?=$dados[0]?>'>
            LINHA <br>
            <input id="input1" type="text" name="linha" value = '<?=$dados[2]?>' disabled> <br>
            <br>
            VIAGEM <br>
            <input id="input1" type="text" name="viagem"> <br>
            <br>
            SENTIDO <br>
            <select id="select" name="sentido">
            <?php
                echo '<option value="sentido" disabled selected>'.((empty($filtro_select)) ? "Selecione o Sentido" : "sentido").'</option>';
            ?>
                <option value="Ida"> Ida </option>
                <option value="Volta"> Volta </option>
            </select> <br>
            <br>
            BOX TERMINAL <br>
            <input id="input2" type="text" name="box"> <br>
            <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>
            <br>
            <a href ="listarLinhas.php"> VOLTAR </a> <br>            
        </form>
    </div>    
    <hr>  
    <div>  
    <h2>Viagens</h2>  
    <table>
        <thead>
            <tr>
                <th>VIAGEM</th>
                <th>SENTIDO</th>  
                <th>BOX</th>  
                <th colspan="4">AÇÃO</th>           
            </tr>
        </thead>

        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM viagens WHERE linha = '$dados[2]' ORDER BY sentido ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
            ?> 

            <tr>
                <td id="td1"> <?=$dados[2]?></td>
                <td id="td2"> <?=$dados[3]?></td>
                <td id="td3"> <?=$dados[4]?></td>
                <td> <a href = "cadastrarHorario.php?id=<?=$dados[0]?>">HORARIOS </a> </td>
                <td> <a href = "listarPontos.php?id=<?=$dados[0]?>">PONTOS </a> </td>
                <td> <a href = "editarViagem.php?id=<?=$dados[0]?>">EDITAR </a> </td>
                <td> <a href = "excluirViagem.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
    </div>      
</body>
</html>