<?php

include_once("conexao.php");

$linha= $_POST['linha'];
$viagem = $_POST['viagem'];
$sentido = $_POST['sentido'];
$dia_semana = $_POST['dia_semana'];
$horario = $_POST['horario'];
$box = $_POST['box'];


$sql_atualizar = mysqli_query($mysqli,"INSERT INTO horarios (linha, viagem, sentido, dia_semana, horario, box) VALUES ('$linha', '$viagem', '$sentido', '$dia_semana', '$horario', '$box')");


if ($sql_atualizar == true) {
    echo " <script> 
        alert('Horário cadastrado com sucesso !!');
        window.location.href = 'listarLinhas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar horário');
        window.location.href = 'listarLinhas.php';
    </script>";   
}

?>