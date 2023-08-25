<?php

include_once("conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM pontos WHERE id_ponto = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Ponto excluido com sucesso !!');
    window.location.href = 'listarLinhas.php';
</script>";  
}
else{
    echo " <script> 
    alert('Ponto não excluido');
    window.location.href = 'listarLinhas.php';
</script>";  
}

?>