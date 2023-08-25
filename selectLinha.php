<?php

include_once("conexao.php");

$empresa = $_GET['empresa'];

$sql = "SELECT linha FROM linhas WHERE empresa = '$empresa' ORDER BY linha ASC";
$result = $mysqli->query($sql);

$data = ['empresa' => $empresa];
$sql = ($data);

while($linha = mysqli_fetch_array($result)){
    echo "<option value='".$linha['linha']."'>".$linha['linha']."</option>";                  

}  

?>