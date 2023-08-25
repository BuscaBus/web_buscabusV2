<?php

include_once("conexao.php");

$viagem = $_POST['viagem'];
$ordem = $_POST['ordem'];
$codigo = $_POST['codigo'];
$ponto = $_POST['ponto'];

$sql_atualizar = mysqli_query($mysqli,"INSERT INTO pontos (viagem, ordem, codigo, ponto) VALUES ('$viagem', '$ordem', '$codigo', '$ponto' )");


if ($sql_atualizar == true) {
    echo " <script> 
        alert('Ponto cadastrado com sucesso !!');
        window.location.href = 'listarLinhas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar ponto');
        window.location.href = 'listarLinhas.php';
    </script>";   
}

?>