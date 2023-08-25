<?php

include_once("conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM horarios WHERE id_horario = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Horario excluido com sucesso !!');
    window.location.href = 'listarLinhas.php';
</script>";  
}
else{
    echo " <script> 
    alert('Horario não excluido');
    window.location.href = 'listarLinhas.php';
</script>";  
}

?>