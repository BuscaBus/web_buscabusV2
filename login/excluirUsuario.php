<?php

include_once("../conexao.php");

$id = $_GET['id'];
$sql_excluir = mysqli_query($mysqli, "DELETE FROM usuario WHERE id_usuario = '$id'");

if($sql_excluir==true){
    echo " <script> 
    alert('Usuário excluido com sucesso !!');
    window.location.href = 'listarUsuario.php';
</script>";  
}
else{
    echo " <script> 
    alert('Usuário não excluido');
    window.location.href = 'listarUsuario.php';
</script>";  
}

?>