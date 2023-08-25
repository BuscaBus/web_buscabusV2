<?php

include_once("conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM box WHERE id_box = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Box excluido com sucesso !!');
    window.location.href = 'listarBox.php';
</script>";  
}
else{
    echo " <script> 
    alert('Box não excluido');
    window.location.href = 'listarBox.php';
</script>";  
}
?>