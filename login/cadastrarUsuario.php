<?php 

require_once ('../conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql_cadastro = mysqli_query($mysqli,"INSERT INTO usuario (nome_usuario, senha_usuario) VALUES ('$usuario', '$senha')");

if ($sql_cadastro == true) {
    echo " <script> 
        alert('Usuário cadastrado com sucesso !!');
        window.location.href = '../index.html';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar usuário');
        window.location.href = 'cadastrarUsuario.html';
    </script>";   
}

?>

