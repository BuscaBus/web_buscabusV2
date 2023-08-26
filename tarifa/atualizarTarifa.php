<?php

include_once("../conexao.php");

$id = $_POST['id'];
$valor = $_POST['valor'];
$data = $_POST['data'];

$sql_atualizar = mysqli_query($mysqli,"UPDATE tarifa SET valor_tarifa = '$valor', data_vigencia = '$data' WHERE id_tarifa = '$id'");

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Tarifa editada com sucesso !!');
        window.location.href = 'listarTarifa.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao editar tarifa');
        window.location.href = 'listarTarifa.php';
    </script>";   
}

?>