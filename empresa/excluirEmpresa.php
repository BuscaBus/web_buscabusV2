<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM empresa WHERE id_empresa = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Empresa excluida com sucesso !!');
    window.location.href = 'listarEmpresas.php';
</script>";  
}
else{
    echo " <script> 
    alert('Empresa não excluida');
    window.location.href = 'listarEmpresas.php';
</script>";  
}

?>