<?php

include_once("conexao.php");

$id = $_POST['id'];
$linha = $_POST['linha'];
$viagem = $_POST['viagem'];
$sentido = $_POST['sentido'];
$box = $_POST['box'];

$sql_atualizar = mysqli_query($mysqli,"UPDATE viagens SET linha = '$linha', viagem = '$viagem', sentido = '$sentido', box = '$box' WHERE id_viagem = '$id'");

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Viagem atualizada com sucesso !!');
        window.location.href = 'listarLinhas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao atualizar viagem');
        window.location.href = 'listarLinhas.php';
    </script>";   
}

?>