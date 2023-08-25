<?php

include_once("conexao.php");

$linha = $_POST['linha'];
$viagem = $_POST['viagem'];
$sentido = $_POST['sentido'];
$box = $_POST['box'];

$sql_atualizar = mysqli_query($mysqli,"INSERT INTO viagens (linha, viagem, sentido, box) VALUES ('$linha', '$viagem', '$sentido', '$box' )"); 

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Viagem cadastrada com sucesso !!');
        window.location.href = 'listarLinhas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar viagem');
        window.location.href = 'listarLinhas.php';
    </script>";   
}

?>