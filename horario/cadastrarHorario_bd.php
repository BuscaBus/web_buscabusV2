<?php

include_once("../conexao.php");

$id_viagem = $_POST['id_viagem'];
$horario = $_POST['horario'];
$dia_semana = $_POST['dia_semana'];

$sql_atualizar = mysqli_query($mysqli,"INSERT INTO horario (id_viagem, horario_viagem, dia_semana) VALUES ('$id_viagem', '$horario', '$dia_semana')"); 

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Horário cadastrado com sucesso !!');
        window.location.href = '../linha/listarLinhas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar horário');
        window.location.href = '../linha/listarLinhas.php';
    </script>";   
}
?>