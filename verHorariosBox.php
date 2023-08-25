<?php

include_once("conexao.php");

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
        #input{
            width: 200px
        }
        #terminal{
            width: 300px;
        }  
        #box{
            width: 150px;
        }          
        #th1{
           width: 70px;
        }
        #th2{
            width: 350px;
        }
    </style>

</head>
<body>
    
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>
    <br>    
    <a href ="principal.php"> VOLTAR </a> 
    <br>
    <h2>Horários por Box</h2>  
    <form method="POST">
        <select name="terminal" id="terminal">
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
                echo '<option value="terminal" disabled selected>'.((empty($filtro_terminal)) ? "Selecione um terminal" : "terminal").'</option>';
            ?>
        </select> <br><br>
        <select name="box" id="box">
            <?php 
                $filtro_box = $_POST["box"];
                echo '<option value="'.$filtro_box.'" disabled selected>'.((empty($filtro_box)) ? "Selecione um box" : $filtro_box).'</option>';             
            ?>                 
        </select> <br>  
        <br> 
        <input type = "submit" value = "BUSCAR"/>
    <br>
    </form>
    <br>  
    SEGUNDA A SEXTA<br>        
    <table>
        <thead>
            <tr>
                <th id="th1">HORARIO</th>
                <th id="th2">VIAGEM</th>                       
            </tr>
        </thead>

        <tbod>
        <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT horario, viagem FROM horarios WHERE box = '$filtro_box' AND dia_semana = 'Segunda a Sexta' ORDER BY  horario ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados1 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados1[0]?></td>
                <td> <?=$dados1[1]?></td>
            </tr>    

            <?php } ?>           
        </tbod>
          
    </table>
    <br>
    SABADO<br>              
    <table>
        <thead>
            <tr>
                <th id="th1">HORARIO</th>
                <th id="th2">VIAGEM</th>                         
            </tr>
        </thead>

        <tbod>
        <?php
             $sql_consulta = mysqli_query($mysqli, "SELECT horario, viagem FROM horarios WHERE linha = '$filtro_box' AND dia_semana = 'Sabado' ORDER BY  horario ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados2 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados2[0]?></td>
                <td> <?=$dados2[1]?></td>
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
    <br>
    DOMINGO E FERIADO<br>              
    <table>
        <thead>
            <tr>
                <th id="th1">HORARIO</th>
                <th id="th2">VIAGEM</th>                                          
            </tr>
        </thead>

        <tbod>
        <?php
             $sql_consulta = mysqli_query($mysqli, "SELECT horario, viagem FROM horarios WHERE linha = '$filtro_box' AND dia_semana = 'Domingo e Feriado' ORDER BY  horario ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados3 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados3[0]?></td>
                <td> <?=$dados3[1]?></td>
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
    
    </div>

    <script src="funcoesBox.js"></script>

</body>
</html>