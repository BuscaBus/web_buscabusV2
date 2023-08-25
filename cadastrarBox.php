<?php

include_once("conexao.php");

$terminal = $_POST['terminal'];
$box = $_POST['box'];

$sql_cadastrar = mysqli_query($mysqli,"INSERT INTO box (terminal, box) VALUES ('$terminal', '$box')");


if ($sql_cadastrar == true) {
    echo " <script> 
        alert('Box cadastrado com sucesso !!');
        window.location.href = 'listarBox.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar box');
        window.location.href = 'listarBox.php';
    </script>";   
}

?>