<?php

include_once('../conexao.php');

$filtro_sql = "";
$filtro_sql_buscar = "";

//Consulta pelo select filtrar por empresa
if($_POST != NULL){
    $filtro_select = $_POST["filtro_select"];
    $filtro_sql = "WHERE nome_empresa = '$filtro_select'";
}
//Consuta pelo imput buscar por código ou nome linha 
if($_GET != NULL){
    $filtro_buscar = $_GET["filtro_buscar"];
    $filtro_sql_buscar = "WHERE cod_linha = '$filtro_buscar' OR nome_linha LIKE '%$filtro_buscar%'";
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
        #td2, #td6{
            width: 65px;
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
        #select_filtro{
            width: 250px;
            font-family: sans-serif;
        }
        #input_buscar{
            width: 300px;
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
    <!--Form para pesquisa pelo código ou nome da linha (campo busca)-->
    <form method="GET" class="font-form">        
        Pesquisar:
        <input id="input_buscar" type="text" name="filtro_buscar"> 
        <input type="submit" value="BUSCAR">
    </form>           
    <!--Form para filtrar por empresa (pesquisa pelo select)-->   
    <form method="POST" class="font-form">        
        Filtrar por empresa: 
            <select name="filtro_select" id="select_filtro">
            <?php
                echo '<option value="'.$filtro_select.'" disabled selected>'.((empty($filtro_select)) ? "Selecione a Empresa" : $filtro_select).'</option>';

                $sql = "SELECT id_empresa, nome_empresa FROM empresa";
                $result = $mysqli->query($sql);

                while($empresa = mysqli_fetch_array($result)){
                echo "<option value='".$empresa['nome_empresa']."'>".$empresa['nome_empresa']."</option>";
                }
            ?>
             <input type="submit" value="BUSCAR"/> <br>          
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
                <th>TARIFA</th>
                <th>ATUALIZAÇÃO</th>
                <th colspan="3">AÇÃO</th>
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
            $sql_consulta = mysqli_query($mysqli, "SELECT e.nome_empresa, Id_linha, l.cod_linha, l.nome_linha, l.tipo_linha, DATE_FORMAT(l.data_vigencia,'%d/%m/%y'), t.valor_tarifa FROM linha AS l JOIN empresa AS e ON l.id_empresa = e.id_empresa JOIN tarifa AS t ON l.id_tarifa = t.id_tarifa $filtro_sql $filtro_sql_buscar ORDER BY cod_linha ASC LIMIT $inicio, $qnt_result_pg");
            $total_reg = mysqli_num_rows($sql_consulta);    

            while($dados = mysqli_fetch_array($sql_consulta)){
            
             //Paginação - Somar a quantidade de linhas
             $result_pg = "SELECT COUNT(id_linha) AS num_result FROM linha";
             $resultado_pg = mysqli_query($mysqli, $result_pg);   
             $row_pg = mysqli_fetch_assoc($resultado_pg);
           
             //Quantidade de páginas
             $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);   
            ?> 
            <tr>
                <td id="td1"> <?=$dados[0]?></td>
                <td id="td2"> <?=$dados[2]?></td>
                <td id="td3"> <?=$dados[3]?></td>
                <td id="td4"> <?=$dados[4]?></td>
                <td id="td6"> <?=$dados[6]?></td>
                <td id="td5"> <?=$dados[5]?></td>
                <td> <a href = "../viagem/cadastrarViagem.php?id=<?=$dados[1]?>">VIAGENS </a> </td>
                <td> <a href = "editarLinha.php?id=<?=$dados[1]?>">EDITAR </a> </td>
                <td> <a href = "excluirLinha.php?id=<?=$dados[1]?>">EXCLUIR </a> </td>                 
            </tr>  
            <?php } ?>           
        </tbod>           
    </table>
        <br>  
        <?php
           //Limitar os links antes e depois
           $max_links = 3;
           echo "<a href='listarLinhas.php?pagina=1'> < Anterior </a>";  
           for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant ++){
             if($pag_ant >=1){
               echo "<a href='listarLinhas.php?pagina=$pag_ant'>$pag_ant </a>";
              }
           }
           echo "$pagina ";
           for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep ++){
             If($pag_dep <= $quantidade_pg){
               echo "<a href='listarLinhas.php?pagina=$pag_dep'>$pag_dep </a>";
             }
           }

           echo "<a href='listarLinhas.php?pagina=$quantidade_pg'>  Próxima > </a>";    
        ?> 
        <br><br>   
        <tr> <td> Total de linhas cadastradas: <?=$row_pg['num_result']?> </td> </tr>
        <hr>
        <a href ="../principal.php"> VOLTAR </a> <br>
        <br>
        <a href ="../index.html"> SAIR</a>    
    </div>
</body>
</html>