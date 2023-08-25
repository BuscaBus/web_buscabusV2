<?php

include_once("conexao.php");

$terminal = $_GET['terminal'];

$sql = "SELECT box FROM box WHERE terminal = '$terminal'";
$result = $mysqli->query($sql);

$data = ['terminal' => $terminal];
$sql = ($data);

while($box = mysqli_fetch_array($result)){
    echo "<option value='".$box['box']."'>".$box['box']."</option>";                  

}  
?>