<?php

include_once("../conexao.php");

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$linha = $_POST['linha'];

$sql_atualizar = mysqli_query($mysqli,"UPDATE linha SET cod_linha = '$codigo', nome_linha = '$linha' WHERE id_linha = '$id'");

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Linha editada com sucesso !!');
        window.location.href = 'listarLinhas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao editar linha');
        window.location.href = 'listarLinhas.php';
    </script>";   
}

?>