<?php
//Incluir a conexão com banco de dados
include_once '../conexao.php';

$ponto = filter_input(INPUT_POST, 'codigo');

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_codigo = "SELECT endereco_ponto FROM ponto WHERE id_ponto LIKE '%$ponto%' LIMIT 20";
$resultado_codigo = mysqli_query($mysqli, $result_codigo);

if(($resultado_codigo) AND ($resultado_codigo->num_codigo != 0 )){
	while($row_codigo = mysqli_fetch_assoc($resultado_codigo)){
		echo "<input>".$row_codigo['endereco_ponto']."</input>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}