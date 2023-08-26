<?php 

require_once ('../conexao.php');

$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$data = $_POST['data'];

$sql_cadastro = mysqli_query($mysqli,"INSERT INTO tarifa (valor_tarifa, tipo_tarifa, data_vigencia) VALUES ('$valor','$tipo', '$data')");

if ($sql_cadastro == true) {
    echo " <script> 
        alert('Tarifa cadastrada com sucesso !!');
        window.location.href = 'listarTarifa.php';
    </script>";  
}
else {
    echo " <script> 
        alert('Erro ao cadastrar tarifa');
        window.location.href = 'cadastrarTarifa.php';
    </script>";   
}

?>