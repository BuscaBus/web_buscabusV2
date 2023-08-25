<?php

include_once("conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM viagens WHERE id_viagem = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Viagem excluida com sucesso !!');
    window.location.href = 'listarLinhas.php';
</script>";  
}
else{
    echo " <script> 
    alert('Viagem não excluida');
    window.location.href = 'listarLinhas.php';
</script>";  
}

?>