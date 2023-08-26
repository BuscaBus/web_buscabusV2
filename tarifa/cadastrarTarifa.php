<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Nova Linha</title>
    <link rel="stylesheet" href="../estilo.css">

    <style>
        #select{
            width: 200px;
        }
        #input{
            width: 200px;
        }
       
    </style>
</head>

<body>
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
    <div>
        <h2>Cadastro de tarifas</h2>
        <h2>Florianópolis - Municipal</h2>    
        <form action="cadastrarTarifa_bd.php" method="post">
            VALOR<br>
            <input id="input" type="text" name="valor"> <br>
            <br>
            TIPO<br>
            <select id="select" name="tipo">
                <option value=""> Selecione um tipo de tarifa </option>
                <option value="Convencional - Florianópolis"> Convencional - Florianópolis </option>
                <option value="Social - Florianópolis"> Social - Florianópolis </option>
                <option value="Executivo Urbano - Florianopolis"> Executivo Urbano - Florianopolis </option>
                <option value="Executivo Urbano - Florianopolis"> Executivo Urbano - Florianopolis </option>
            </select> <br>
            <br>
            DATA DE VIGÊNCIA<br>
            <input id="input" type="date" name="data"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>            
        </form>
    </div>
    <div>
        <h2>Intermunicipal</h2>
        <form action="cadastrarTarifa_bd.php" method="post">
            VALOR<br>
            <input id="input" type="text" name="valor"> <br>
            <br>
            TIPO<br>
            <select id="select" name="tipo">
                <option value=""> Selecione um tipo de tarifa </option>
                <option value="Patamar I"> Patamar I </option>
                <option value="Patamar II"> Patamar II </option>
                <option value="Patamar III"> Patamar III </option>
                <option value="Patamar IV"> Patamar IV </option>
                <option value="Patamar V"> Patamar V </option>
                <option value="Patamar VI"> Patamar VI </option>
                <option value="Patamar VII"> Patamar VII </option>
                <option value="Patamar VIII"> Patamar VIII </option>
                <option value="Patamar IX"> Patamar IX </option>
                <option value="Patamar EXECI"> Patamar EXECI </option>
                <option value="Patamar EXEC2"> Patamar EXEC2 </option>
                <option value="Patamar EXEC3"> Patamar EXEC3 </option>
                <option value="Patamar EXEC4"> Patamar EXEC4 </option>
                <option value="Patamar EXEC5"> Patamar EXEC5 </option>
                <option value="Patamar EXEC6"> Patamar EXEC6 </option>
                <option value="Patamar EXEC7"> Patamar EXEC7 </option>
                <option value="Patamar EXEC8"> Patamar EXEC8 </option>
            </select> <br>
            <br>
            DATA DE VIGÊNCIA<br>
            <input id="input" type="date" name="data"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>          
        </form>
    </div>
    <div>
        <h2>São José - Municipal</h2>
        <form action="cadastrarTarifa_bd.php" method="post">
            VALOR<br>
            <input id="input" type="text" name="valor"> <br>
            <br>
            TIPO<br>
            <select id="select" name="tipo">
                <option value=""> Selecione um tipo de tarifa </option>
                <option value="Patamar D1B"> Patamar D1B </option>
                <option value="Patamar D1EI"> Patamar D1EI </option>
                <option value="Patamar D1J"> Patamar D1J</option>
                <option value="Patamar PM1"> Patamar PM1 </option>
                <option value="Patamar EXECSJ"> Patamar EXECSJ </option>             
            </select> <br>
            <br>
            DATA DE VIGÊNCIA<br>
            <input id="input" type="date" name="data"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>           
        </form>
    </div>
    <div>
        <h2>Palhoça - Municipal</h2>
        <form action="cadastrarTarifa_bd.php" method="post">
            VALOR<br>
            <input id="input" type="text" name="valor"> <br>
            <br>
            TIPO<br>
            <select id="select" name="tipo">
                <option value=""> Selecione um tipo de tarifa </option>
                <option value="Patamar MP"> Patamar MP </option>
                <option value="Patamar JSEC2"> Patamar JSEC2 </option>
                <option value="Patamar JSEC10"> Patamar JSEC10</option>
                <option value="Patamar JSEC14"> Patamar JSEC14 </option>
                <option value="Patamar JSEC16"> Patamar JSEC16 </option>             
            </select> <br>
            <br>
            DATA DE VIGÊNCIA<br>
            <input id="input" type="date" name="data"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>            
        </form>
    </div>
    <div>
        <h2>Biguaçu - Municipal</h2>
        <form action="cadastrarTarifa_bd.php" method="post">
            VALOR<br>
            <input id="input" type="text" name="valor"> <br>
            <br>
            TIPO<br>
            <select id="select" name="tipo">
                <option value=""> Selecione um tipo de tarifa </option>
                <option value="Patamar BM1"> Patamar BM1 </option>
                <option value="Patamar BM2"> Patamar BM </option>                           
            </select> <br>
            <br>
            DATA DE VIGÊNCIA<br>
            <input id="input" type="date" name="data"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>           
        </form>
    </div>
    <div>
        <h2>Antônio Carlos - Municipal</h2>
        <form action="cadastrarTarifa_bd.php" method="post">
            VALOR<br>
            <input id="input" type="text" name="valor"> <br>
            <br>
            TIPO<br>
            <select id="select" name="tipo">
                <option value=""> Selecione um tipo de tarifa </option>
                <option value="Patamar AC1"> Patamar AC1 </option>                                          
            </select> <br>
            <br>
            DATA DE VIGÊNCIA<br>
            <input id="input" type="date" name="data"> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br> 
            <br>
            <a href="listarTarifa.php"> VOLTAR </a> <br>
        </form>
    </div>


</body>

</html>