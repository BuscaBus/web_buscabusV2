<?php

include_once("../conexao.php");

$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$sql_atualizar = mysqli_query($mysqli,"INSERT INTO ponto (endereco_ponto, bairro_ponto, cidade_ponto, ponto_lat, ponto_long) VALUES ('$endereco', '$bairro', '$cidade', '$latitude', '$longitude')");


if ($sql_atualizar == true) {
    echo " <script> 
        alert('Ponto cadastrado com sucesso !!');
        window.location.href = 'listarponto.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar ponto');
        window.location.href = 'listarponto.php';
    </script>";   
}

?>