<?php

include_once("../conexao.php");

$id = $_POST['id'];
$endereco = $_POST['endereco'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$sql_atualizar = mysqli_query($mysqli,"UPDATE ponto SET endereco_ponto = '$endereco', ponto_lat = '$latitude', ponto_long = '$longitude' WHERE id_ponto = '$id'");

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Ponto editado com sucesso !!');
        window.location.href = 'listarPonto.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao editar ponto');
        window.location.href = 'listarPonto.php';
    </script>";   
}

?>