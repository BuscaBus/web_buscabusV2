<?php 

require_once ('../conexao.php');

$codigo = $_POST['codigo'];
$linha = $_POST['linha'];
$tipo = $_POST['tipo'];
$empresa = $_POST['empresa'];
$tarifa = $_POST['tarifa'];

$sql_cadastro = mysqli_query($mysqli,"INSERT INTO linha (cod_linha, nome_linha, tipo_linha, id_empresa, id_tarifa) VALUES ('$codigo','$linha', '$tipo', '$empresa', '$tarifa')");

if ($sql_cadastro == true) {
    echo " <script> 
        alert('Linha cadastrada com sucesso !!');
        window.location.href = 'listarLinhas.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar linha');
        window.location.href = 'cadastrarLinha.html';
    </script>";   
}

?>