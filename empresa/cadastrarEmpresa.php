<?php 

require_once ('../conexao.php');

$empresa = $_POST['empresa'];
$cidade = $_POST['cidade'];
$site = $_POST['url'];

$sql_cadastro = mysqli_query($mysqli,"INSERT INTO empresa (nome_empresa, cidade_empresa, url_empresa) VALUES ('$empresa', '$cidade', '$site')");

if ($sql_cadastro == true) {
    echo " <script> 
        alert('Empresa cadastrada com sucesso !!');
        window.location.href = 'listarEmpresas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar empresa');
        window.location.href = 'cadastrarEmpresa.html';
    </script>";   
}

?>