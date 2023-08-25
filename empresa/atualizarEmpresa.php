<?php

include_once("../conexao.php");

$id = $_POST['id'];
$empresa = $_POST['empresa'];
$cidade = $_POST['cidade'];
$site = $_POST['url'];

$sql_atualizar = mysqli_query($mysqli,"UPDATE empresa SET nome_empresa = '$empresa', cidade_empresa = '$cidade', url_empresa = '$site' WHERE id_empresa = '$id'");

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Empresa editada com sucesso !!');
        window.location.href = 'listarEmpresas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao editar empresa');
        window.location.href = 'listarEmpresas.php';
    </script>";   
}

?>