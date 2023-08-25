<?php

include_once("../conexao.php");

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql_atualizar = mysqli_query($mysqli,"UPDATE usuario SET nome_usuario = '$usuario', senha_usuario = '$senha' WHERE id_usuario = '$id'");

if ($sql_atualizar == true) {
    echo " <script> 
        alert('Usuário editado com sucesso !!');
        window.location.href = 'listarUsuario.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao editar usuário');
        window.location.href = 'listarUsuario.php';
    </script>";   
}

?>