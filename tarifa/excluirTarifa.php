<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM tarifa WHERE id_tarifa = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Tarifa excluido com sucesso !!');
    window.location.href = 'listarTarifa.php';
</script>";  
}
else{
    echo " <script> 
    alert('Tarifa não excluida');
    window.location.href = 'listarTarifa.php';
</script>";  
}

?>