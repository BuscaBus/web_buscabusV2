<?php 

include_once('../conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql_consultar = mysqli_query($mysqli, "SELECT * FROM usuario WHERE nome_usuario = '$usuario' AND senha_usuario = '$senha'");

if(mysqli_num_rows($sql_consultar)!= 0){    
    header('location:../principal.php');
}
else{
    echo " <script> 
        alert('Usuário não cadastrado');
        window.location.href = '../index.html';
    </script>";   
}

?>