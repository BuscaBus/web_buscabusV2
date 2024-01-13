<?php

include_once('../conexao.php');

$filtro_sql = "";
$filtro_sql_buscar = "";

//Consulta pelo select filtrar
if($_POST != NULL){
    $filtro_select = $_POST["filtro_select"];
    $filtro_sql = "WHERE cidade_ponto = '$filtro_select'";
}
//Consuta pelo imput buscar
/*if($_GET != NULL){
    $filtro_buscar = $_GET["filtro_buscar"];
    $filtro_sql_buscar = "WHERE id_ponto = '$filtro_buscar' OR endereco_ponto LIKE '%$filtro_buscar%' OR bairro_ponto LIKE '%$filtro_buscar%'";
}*/
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
        #filtro_select{
            width: 265px;
        }
        #input_buscar{
            width: 300px;
        }
        #th1{
            width: 70px;
        }
        #th2{
            width: 450px;
        }
        #th3{
            width: 200px;
        }
        #th4{
            width: 200px;
        }
        #th5{
            width: 75px;
        }
    </style>
    
</head>
<body>
    <h1>LISTA DE PONTOS</h1>
    <div>
    <a href ="cadastrarPonto.php"> NOVO PONTO </a> <br>
    <hr>          
    <br>
    <!--Form para pesquisa pelo campo busca-->
    <!--<form method="GET" class="font-form">        
        Pesquisar:
        <input id="input_buscar" type="text" name="filtro_buscar"> 
        <input type="submit" value="BUSCAR">
    </form>-->
    <!--Form para pesquisar pelo filtro da cidade-->     
    <form method = "POST" class="font-form" id="form-pesquisa">
        Filtrar por cidade: 
        <select id="filtro_select" name="filtro_select">
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
                <th id="th2">PONTO</th>
                <th id="th3">BAIRRO</th>
                <th id="th4">CIDADE</th>    
                <th id="th5" colspan="2">AÇÃO</th>                
            </tr>
        </thead>
        <tbod>
            <?php
            //Recebe o numero da página
            $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
            $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1; 
             
            //Setar a quantidade de itens por página
            $qnt_result_pg = 15;
             
            //Calcular o inicio da visualização
            $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
 
            //Consulta no banco de dados e tras os resultados    
            $sql_consulta = mysqli_query($mysqli, "SELECT * FROM ponto $filtro_sql $filtro_sql_buscar ORDER BY endereco_ponto ASC LIMIT $inicio, $qnt_result_pg");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
            //Paginação - Somar a quantidade de linhas
            $result_pg = "SELECT COUNT(id_ponto) AS num_result FROM ponto";
            $resultado_pg = mysqli_query($mysqli, $result_pg);   
            $row_pg = mysqli_fetch_assoc($resultado_pg);
                
            //Quantidade de páginas
            $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);  
            
            ?> 
            <tr>
                <td> <?=$dados[0]?></td>
                <td> <?=$dados[1]?></td>
                <td> <?=$dados[2]?></td>
                <td> <?=$dados[3]?></td>
                <td> <a href = "editarPonto.php?id=<?=$dados[0]?>">EDITAR </a> </td>
                <td> <a href = "excluirPonto.php?id=<?=$dados[0]?>">EXCLUIR </a> </td>            
            </tr>  
            
            <?php } ?>           
        </tbod>           
    </table>
            <br>    
            <?php 
                //Limitar os links antes e depois
                $max_links = 3;
                echo "<a href='listarPonto.php?pagina=1'> < Anterior </a>";  
                for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant ++){
                    if($pag_ant >=1){
                      echo "<a href='listarPonto.php?pagina=$pag_ant'>$pag_ant </a>";
                    }
                }
                echo "$pagina ";
                for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep ++){
                    If($pag_dep <= $quantidade_pg){
                      echo "<a href='listarPonto.php?pagina=$pag_dep'>$pag_dep </a>";
                    }
                }
                    
           echo "<a href='listarPonto.php?pagina=$quantidade_pg'>  Próxima > </a>";   
        ?>           
        <br><br>        
        <tr> <td> Total de pontos cadastrados: <?=$row_pg['num_result']?> </td> </tr>
        <hr>
        <a href ="../principal.php"> VOLTAR </a> <br>
        <br>
    </div>
</body>
</html>