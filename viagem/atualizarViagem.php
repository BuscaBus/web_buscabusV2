<?php

include_once("../conexao.php");

$id_viagem = $_POST['id_viagem'];
$id_linha = $_POST['id_linha'];
$viagem = $_POST['viagem'];
$partida = $_POST['partida']; 

$sql_atualizar = mysqli_query($mysqli,"UPDATE viagem SET nome_viagem = '$viagem', partida_viagem = '$partida' WHERE id_viagem = '$id_viagem'");

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Viagem atualizada com sucesso !!');
        window.location.href = '../viagem/cadastrarViagem.php?id=$id_linha';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao atualizar viagem');
        window.location.href = '../viagem/cadastrarViagem.php?id=$id_linha';
    </script>";   
}

?>