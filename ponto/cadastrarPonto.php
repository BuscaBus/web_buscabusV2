<?php

include_once("../conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../estilo.css">  

    <style>
       #input{
        width: 300px;
       }
    </style>

</head>
<body>
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>    
    <h2>Cadastrar Ponto</h2>
        <form action="cadastrarPonto_bd.php" method="post">
            PONTO <br>
            <input  id="input" type="text" name="endereco"> <br>
            <br>
            BAIRRO <br>
            <input id="input" type="text" name="bairro"> <br>
            <br>
            CIDADE <br>
            <select id="input" name="cidade">
                <option value=""> Selecione a cidade </option>
                <option value="Aguas Monas"> Àguas Mornas </option>
                <option value="Antonio Carlos"> Antônio Carlos </option>
                <option value="Biguacu"> Biguaçu </option>
                <option value="Florianopolis"> Florianópolis </option>
                <option value="Governador Celso Ramos"> Governador Celso Ramos </option>
                <option value="Palhoça"> Palhoça </option>
                <option value="Sao Jose"> São José </option>         
                <option value="Santo Amaro da Imperatriz"> Santo Amaro da Imperatriz </option>               
            </select> <br>
            <br>
            LATITUDE <br>
            <input id="input" type="text" name="latitude"> <br>
            <br>
            LONGITUDE <br>
            <input id="input" type="text" name="longitude"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>
            <br>
            <a href ="listarPonto.php"> VOLTAR </a> <br>            
        </form>
    </div>       
 
</body>
</html>