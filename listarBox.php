<?php

include_once('conexao.php');

$filtro_sql = "";

if($_POST != NULL){
    $filtro_terminal = $_POST["filtro_terminal"];
    $filtro_sql = "WHERE terminal = '$filtro_terminal'";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pontos</title>
    <link rel="stylesheet" href="./estilo.css">   

    <style>
        #input{
            width: 250px;
        }
        #th1{
            width: 370px;
        }
        #th2{
            width: 85px;
        }
        #th3{
            width: 70px;
        }        
    </style>
    
</head>
<body>
    <h1>LISTA DE TERMINAIS/BOX</h1>
    <div>
    <a href ="cadastrarBox.html"> NOVO BOX </a> <br>
    <hr> 
    <br>
    <form method = "POST">
    <select name="filtro_terminal" id="terminal">
            PESQUISAR BOX
            <option value="TICEN A - Terminal de Integração do Centro "> TICEN A - Terminal de Integração do Centro  </option> 
            <option value="TICEN B - Terminal de Integração do Centro "> TICEN B - Terminal de Integração do Centro  </option> 
            <option value="TICEN C - Terminal de Integração do Centro "> TICEN C - Terminal de Integração do Centro  </option>  
            <option value="TICEN D - Terminal de Integração do Centro "> TICEN D - Terminal de Integração do Centro  </option>                
            <option value="TITRI - Terminal de Integração da Trindade "> TITRI - Terminal de Integração da Trindade  </option>  
            <option value="TIRIO - Terminal de Integração do Rio Tavares "> TIRIO - Terminal de Integração do Rio Tavares </option>  
            <option value="TILAG - Terminal de Integração da Lagoa "> TILAG - Terminal de Integração da Lagoa  </option>  
            <option value="TISAN - Terminal de Integração de Santo Antônio "> TISAN - Terminal de Integração de Santo Antônio </option>  
            <option value="TICAN - Terminal de Integração de Canasvieiras "> TICAN - Terminal de Integração de Canasvieiras  </option>  
            <option value="TCF - Terminal Cidade de Florianópolis "> TCF - Terminal Cidade de Florianópolis   </option> 
            <?php
                echo '<option value="'.$filtro_terminal.'" disabled selected>'.((empty($filtro_terminal)) ? "Selecione um terminal" : $filtro_terminal).'</option>';               
            ?>    
            <input type = "submit" value = "BUSCAR"/> <br>     
        </select> <br> 
        </form>  
    <br>
    <table>
        <thead>
            <tr>
                <th id="th1">TERMINAL</th>
                <th id="th2">BOX</th>
                <th id="th3">AÇÃO</th>                
            </tr>
        </thead>

        <tbod>
            <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM box $filtro_sql");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
            ?> 

            <tr>
                <td> <?=$dados[1]?></td>
                <td> <?=$dados[2]?></td>
                <td> <a href = "excluirBox.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>
                
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
        <br>        
        <tr> <td> Total de box cadastrados: <?=$total_reg?> </td> </tr>
        <hr>
        <a href ="principal.php"> VOLTAR </a> <br>
        <br>
    </div>    
        
</body>
</html>