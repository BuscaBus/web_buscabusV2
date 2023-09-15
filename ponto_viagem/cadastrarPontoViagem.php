<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_editar = mysqli_query($mysqli, "SELECT * FROM viagem WHERE id_viagem = '$id' ");
$dados = mysqli_fetch_array($sql_editar);

// Faz a consulta no BD pelo codigo passado
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_ponto = $_POST['id_ponto'];
    $result_endereco = "SELECT id_ponto, endereco_ponto FROM ponto WHERE id_ponto = '$id_ponto'";
    $resultado_endereco = mysqli_query($mysqli, $result_endereco);

    while($resultado = mysqli_fetch_array($resultado_endereco)){
    $endereco_ponto = $resultado['endereco_ponto'];
    $codigo_ponto = $resultado['id_ponto'];
                         
    }
}

 // Trata caso o número que não foi informado
if (empty($_POST['id_ponto'])) {   
    $codigo_ponto = NULL;
    $endereco_ponto = NULL;
}

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
        #input_viagem{
            width: 300px;
            text-align: center;
        }
        #id_ponto{
            width: 75px
        }
        #input1{
            width: 75px
        }
        #input2{
            width: 400px
        }
        #input3{
            width: 60px
        }
        #input4{
            width: 40px
        }
        #select{
            width: 200px;
        }
        #th1{
           width: 70px;
        }
        #th2{
            width: 70px;
        }
        #th3{
            width: 300px;
        }
        #th4{
            width: 65px;
        }
        #th5{
            width: 80px;
        }
    </style>

</head>
<body>    
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>
    <h2>Cadastrar Pontos da Viagem</h2>
        <form id="form_pesquisar" method="POST" action="">
             <div id="formulario">
                <input type="hidden" name="id_viagem" value = '<?=$dados[0]?>'>
                 VIAGEM <br>
                <input id="input_viagem" type="text" name="viagem" value = '<?=$dados[2]?>' disabled> <br>
                <br>                
                    <div class="form-group" action=""> 
                        <input type="hidden" name="id_viagem" value = '<?=$dados[0]?>'>
                        <input id="id_ponto" type="text" name="id_ponto" placeholder="Pesquisar">
                        <input type="submit" value=">" name="pesquisar_ponto"> 
                        <label>ORDEM</label>
                        <input id="input4" type="text" name="ordem">
                        <label>CÓDIGO</label>
                        <input id="input1" type="text" name="codigo" value='<?=$codigo_ponto?>' disabled>                        
                        <label>PONTO</label>
                        <input id="input2" type="text" name="endereco_ponto" value='<?=$endereco_ponto?>' disabled>
                        <label>TEMPO</label>
                        <input id="input3" type="text" name="tempo_viagem">  
                        <input type="submit" value="SALVAR" name="salvar_pontos" formaction="cadastrarPontoViagem_bd">                      
                    </div>                    
              </div>                               
              <br><br>
            <a href ="../linha/listarLinhas.php"> VOLTAR </a> <br>   
            <br>         
        </form>
    </div>   
    <hr>  
    <div>  
    <h2>Relação de pontos -> <?=$dados[2]?></h2>    
    <table>
        <thead>
            <tr>
                <th id="th1">ORDEM</th>
                <th id="th2">CÓDIGO</th>     
                <th id="th3">ENDEREÇO</th>
                <th id="th4">TEMPO</th>  
                <th id="th5">AÇÃO</th>                         
            </tr>
        </thead>

        <tbod>
        <?php
            $sql_consulta = mysqli_query($mysqli, "SELECT p.endereco_ponto, pv.id_ponto_viagem, pv.ordem_ponto, pv.id_ponto, pv.tempo_viagem, pv.id_viagem FROM ponto_viagem AS pv JOIN ponto AS p ON pv.id_ponto = p.id_ponto WHERE id_viagem = '$dados[0]' ORDER BY  ordem_ponto ASC");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados1 = mysqli_fetch_array($sql_consulta)){
                       
            ?> 

            <tr>
                <td> <?=$dados1[2]?></td>
                <td> <?=$dados1[3]?></td>
                <td> <?=$dados1[0]?></td>
                <td> <?=$dados1[4]?></td>
                <td> <a href = "excluirPontoViagem.php?id=<?=$dados1[1]?>&id_viagem=<?=$dados1[5]?>">EXCLUIR </a> </td>
            </tr>    

            <?php } ?>           
        </tbod>          
    </table>       
</body>
</html>