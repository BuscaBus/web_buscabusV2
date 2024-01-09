<?php

include_once("../conexao.php");

$id = $_POST['id'];
$viagem = $_POST['viagem'];
$partida = $_POST['partida'];
$sentido = $_POST['sentido'];

$sql_atualizar = mysqli_query($mysqli,"INSERT INTO viagem (id_linha, nome_viagem, partida_viagem, sentido_viagem) VALUES ('$id', '$viagem', '$partida', '$sentido')"); 

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Viagem cadastrada com sucesso !!');
        window.location.href = 'cadastrarViagem.php?id=$id';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar viagem');
        window.location.href = 'cadastrarViagem.php?id=$id';
    </script>";   
}

?>