<?php

include_once('../conexao.php');

$filtro_sql = "";

if($_POST != NULL){
    $filtro_select = $_POST["filtro_select"];
    $filtro_sql = "WHERE cidade_ponto = '$filtro_select'";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pontos</title>
    <link rel="stylesheet" href="../estilo.css"> 
   
    <style>
        #input{
            width: 250px;
        }
        #th1{
            width: 70px;
        }
        #th2{
            width: 350px;
        }
        #th3{
            width: 200px;
        }
        #th4{
            width: 200px;
        }
        #th5{
            width: 150px;
        }
    </style>
    
</head>
<body>
    <h1>LISTA DE PONTOS</h1>
    <div>
    <a href ="cadastrarPonto.php"> NOVO PONTO </a> <br>
    <hr>          
    <br>
    <form method = "POST" class="font-form" id="form-pesquisa">
        Pesquisar: 
        <select id="input" name="filtro_select">
                <option value=""> Selecione a cidade </option>
                <option value="Àguas Mornas"> Àguas Mornas </option>
                <option value="Antônio Carlos"> Antônio Carlos </option>
                <option value="Biguaçu"> Biguaçu </option>
                <option value="Florianópolis"> Florianópolis </option>
                <option value="Governador Celso Ramos"> Governador Celso Ramos </option>
                <option value="Palhoça"> Palhoça </option>
                <option value="São José"> São José </option>         
                <option value="Santo Amaro da Imperatriz"> Santo Amaro da Imperatriz </option>               
            <input type = "submit" value = "BUSCAR"/> <br>          
            </select> 
        <br>
    </form> 
    <table>
        <thead>
            <tr>
                <th id="th1">CODIGO</th>
                <th id="th2">ENDEREÇO</th>
                <th id="th3">BAIRRO</th>
                <th id="th4">CIDADE</th>    
                <th id="th5">AÇÃO</th>                
            </tr>
        </thead>
        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM ponto $filtro_sql ORDER BY endereco_ponto ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
            ?> 
            <tr>
                <td> <?=$dados[0]?></td>
                <td> <?=$dados[1]?></td>
                <td> <?=$dados[2]?></td>
                <td> <?=$dados[3]?></td>
                <td> <a href = "excluirPonto.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>            
            </tr>   
            <?php } ?>           
        </tbod>           
    </table>
        <br>        
        <tr> <td> Total de pontos cadastrados nesse sentido: <?=$total_reg?> </td> </tr>
        <hr>
        <a href ="../principal.php"> VOLTAR </a> <br>
        <br>
    </div>
</body>
</html>