<?php

include_once("conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM viagens WHERE id_viagem = '$id' ");
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
        #input{
            width: 200px
        }
        #select{
            width: 200px;
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
    <h2>Cadastrar Horário</h2>
        <form action="atualizarHorario.php" method="post">
            <input type="hidden" name="id" value = '<?=$dados[0]?>'>
            <input type="hidden" name="linha" value = '<?=$dados[1]?>'> <br>
            VIAGEM <br>
            <input id="input" type="text" name="viagem" value = '<?=$dados[2]?>'> <br>
            <br>
            HORARIO <br>
            <input id="input" type="text" name="horario"> <br>
            <br>
            DIA DA SEMANA <br>
            <select id="select" name="dia_semana">
                <option value="Segunda a Sexta"> Segunda a Sexta </option>
                <option value="Sabado"> Sabado </option>
                <option value="Domingo e Feriado"> Domingo e Feriado </option>
            </select> <br>
            <input type="hidden" name="sentido" value = '<?=$dados[3]?>'> <br>
            <input type="hidden" name="box" value = '<?=$dados[4]?>'> <br>
            <input type="submit" value="CADASTRAR"> <br>
            <br>
            <a href ="listarLinhas.php"> VOLTAR </a> <br>   
            <br>         
        </form>
    </div>    
    <hr>  
    <div>  
    <h2>Horários</h2>      
    SEGUNDA A SEXTA <br>        
    <table>
        <thead>
            <tr>
                <th id="th1">HORARIO</th>
                <th id="th2">VIAGEM</th>     
                <th id="th3">AÇÃO</th>                         
            </tr>
        </thead>

        <tbod>
        <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM horarios WHERE viagem = '$dados[2]' AND dia_semana = 'Segunda a Sexta' ORDER BY  horario ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados1 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados1[5]?></td>
                <td> <?=$dados1[2]?></td>
                <td> <a href = "excluirHorario.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>
            </tr>    

            <?php } ?>           
        </tbod>
          
    </table>
    <br>
    SABADO <br>              
    <table>
        <thead>
            <tr>
                <th id="th1">HORARIO</th>
                <th id="th2">VIAGEM</th>     
                <th id="th3">AÇÃO</th>                         
            </tr>
        </thead>

        <tbod>
        <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM horarios WHERE viagem = '$dados[2]' AND dia_semana = 'Sabado' ORDER BY  horario ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados2 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados2[5]?></td>
                <td> <?=$dados2[2]?></td>
                <td> <a href = "excluirHorario.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
    <br>
    DOMINGO E FERIADO <br>              
    <table>
        <thead>
            <tr>
                <th id="th1">HORARIO</th>
                <th id="th2">VIAGEM</th>     
                <th id="th3">AÇÃO</th>                          
            </tr>
        </thead>

        <tbod>
        <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM horarios WHERE viagem = '$dados[2]' AND dia_semana = 'Sabado' ORDER BY  horario ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados3 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados3[5]?></td>
                <td> <?=$dados3[2]?></td>
                <td> <a href = "excluirHorario.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
    </div>
      
</body>
</html>