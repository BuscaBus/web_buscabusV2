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
        #empresa, #linha{
            width: 300px;
        }
        #th1{
           width: 90px;
        }
        #th2{
            width: 300px;
        }
        #th3{
            width: 70px;
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
    <h2>Horários</h2>  
    <form method="POST">
        <select name="empresa" id="empresa">
            <?php 
                $sql = "SELECT empresa FROM empresas";
                $result = $mysqli->query($sql);

                while($empresa = mysqli_fetch_array($result)){
                    echo "<option value='".$empresa['empresa']."'>".$empresa['empresa']."</option>";
                } 
                $filtro_empresa = $_POST["empresa"];
                echo '<option value="'.$filtro_empresa.'" disabled selected>'.((empty($filtro_empresa)) ? "Selecione a Empresa" : $filtro_empresa).'</option>';             
            ?>                 
        </select> <br>  
        <br>        
        <select name="linha" id="linha">
            <?php
                 $filtro_linha = $_POST["linha"];
                 echo '<option value="'.$filtro_linha.'" disabled selected>'.((empty($filtro_linha)) ? "Selecione uma linha" : $filtro_linha).'</option>';       
            ?>        
        </select> <br> 
        <br> 
        <select id="select" name="sentido">
            <option value="Ida"> Ida </option>
            <option value="Volta"> Volta </option>
            <?php
                $filtro_sentido = $_POST["sentido"];
                echo '<option value="'.$filtro_sentido.'" disabled selected>'.((empty($filtro_sentido)) ? "Selecione um sentido" : $filtro_sentido).'</option>';               
            ?>    
        </select> <br><br>
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
            $sql_consulta = mysqli_query($mysqli, "SELECT horario, viagem FROM horarios WHERE linha = '$filtro_linha' AND dia_semana = 'Segunda a Sexta' AND sentido = '$filtro_sentido' ORDER BY  horario ASC");
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
             $sql_consulta = mysqli_query($mysqli, "SELECT horario, viagem FROM horarios WHERE linha = '$filtro_linha' AND dia_semana = 'Sabado' AND sentido = '$filtro_sentido' ORDER BY  horario ASC");
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
             $sql_consulta = mysqli_query($mysqli, "SELECT horario, viagem FROM horarios WHERE linha = '$filtro_linha' AND dia_semana = 'Domingo e Feriado' AND sentido = '$filtro_sentido' ORDER BY  horario ASC");
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

    <script src="funcoes.js"></script>

</body>
</html>