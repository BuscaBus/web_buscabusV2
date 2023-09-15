<?php

include_once("../conexao.php");

$id_viagem = $_GET['id_viagem'];
$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM ponto_viagem WHERE id_ponto_viagem = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Ponto excluido com sucesso !!');
    window.location.href = 'cadastrarPontoViagem.php?id=$id_viagem';
</script>";  
}
else{
    echo " <script> 
    alert('Ponto não excluido');
    window.location.href = 'cadastrarPontoViagem.php?id=$id_viagem';
</script>";  
}

?>