<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM viagem WHERE id_viagem = '$id' ");
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
        <form action="cadastrarHorario_bd.php" method="post">
            <input type="hidden" name="id_viagem" value = '<?=$dados[0]?>'>
            VIAGEM <br>
            <input id="input" type="text" name="viagem" value = '<?=$dados[2]?>' disabled> <br>
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
            <br>
            <input type="submit" value="CADASTRAR"> <br>
            <br>
            <a href ="../linha/listarLinhas.php"> VOLTAR </a> <br>   
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
            $sql_consulta = mysqli_query($mysqli, "SELECT h.id_horario, v.nome_viagem, h.horario_viagem, h.dia_semana FROM horario AS h JOIN viagem AS v ON h.id_viagem = v.id_viagem WHERE nome_viagem = '$dados[2]' AND dia_semana = 'Segunda a Sexta' ORDER BY  horario_viagem ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados1 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados1[2]?></td>
                <td> <?=$dados1[1]?></td>
                <td> <a href = "excluirHorario.php?id=<?=$dados1[0]?>">EXCLUIR </a> </td>
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
            $sql_consulta = mysqli_query($mysqli, "SELECT h.id_horario, v.nome_viagem, h.horario_viagem, h.dia_semana FROM horario AS h JOIN viagem AS v ON h.id_viagem = v.id_viagem WHERE nome_viagem = '$dados[2]' AND dia_semana = 'Sabado' ORDER BY  horario_viagem ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados2 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados2[2]?></td>
                <td> <?=$dados2[1]?></td>
                <td> <a href = "excluirHorario.php?id=<?=$dados2[0]?>">EXCLUIR </a> </td>
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
            $sql_consulta = mysqli_query($mysqli, "SELECT h.id_horario, v.nome_viagem, h.horario_viagem, h.dia_semana FROM horario AS h JOIN viagem AS v ON h.id_viagem = v.id_viagem WHERE nome_viagem = '$dados[2]' AND dia_semana = 'Domingo e Feriado' ORDER BY  horario_viagem ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados3 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados3[2]?></td>
                <td> <?=$dados3[1]?></td>
                <td> <a href = "excluirHorario.php?id=<?=$dados3[0]?>">EXCLUIR </a> </td>
            </tr>    

            <?php } ?>           
        </tbod>
           
    </table>
    </div>
      
</body>
</html>