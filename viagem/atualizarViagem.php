<?php

include_once("../conexao.php");

$id = $_POST['id'];
$viagem = $_POST['viagem'];
$partida = $_POST['partida'];

$sql_atualizar = mysqli_query($mysqli,"UPDATE viagem SET nome_viagem = '$viagem', partida_viagem = '$partida' WHERE id_viagem = '$id'");

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Viagem atualizada com sucesso !!');
        window.location.href = '../linha/listarLinhas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao atualizar viagem');
        window.location.href = '../linha/listarLinhas.php';
    </script>";   
}

?>