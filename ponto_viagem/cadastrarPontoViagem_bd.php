<?php

include_once("../conexao.php");

$id_viagem = $_POST['id_viagem'];
$codigo = $_POST['codigo'];
$ordem = $_POST['ordem'];
$tempo_viagem = $_POST['tempo_viagem'];

$sql_atualizar = mysqli_query($mysqli,"INSERT INTO ponto_viagem (ordem_ponto, tempo_viagem, id_ponto, id_viagem) VALUES ('$ordem', '$tempo_viagem', '$codigo', '$id_viagem')");


if ($sql_atualizar == true) {
    echo " <script> 
        alert('Ponto cadastrado com sucesso !!');
        window.location.href = 'cadastrarPontoViagem.php?id=$id_viagem';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar ponto');
        window.location.href = 'cadastrarPontoViagem.php?id=$id_viagem';
    </script>";   
}

?>