<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM linha WHERE id_linha = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Linha excluido com sucesso !!');
    window.location.href = 'listarLinhas.php';
</script>";  
}
else{
    echo " <script> 
    alert('Linha não excluido');
    window.location.href = 'listarLinhas.php';
</script>";  
}

?>