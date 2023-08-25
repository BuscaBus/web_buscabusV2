<?php

$mysqli = mysqli_connect("localhost", "root", "", "web_buscabus" );

if (mysqli_connect_errno()) {
    echo "Falha ao conectar: " . $mysqli_connect_error();
}

?>