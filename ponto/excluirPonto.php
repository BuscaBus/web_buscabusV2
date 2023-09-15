<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM ponto WHERE id_ponto = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Ponto excluido com sucesso !!');
    window.location.href = 'listarPonto.php';
</script>";  
}
else{
    echo " <script> 
    alert('Ponto não excluido');
    window.location.href = 'listarPonto.php';
</script>";  
}

?>