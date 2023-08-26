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
            width: 300px;
        }
        #input{
            width: 300px;
        }
       
    </style>
</head>

<body>
    <h1>Sistema de Cadastro BuscaBus</h1>
    <hr>
       <?php
        require_once ('../conexao.php');
        $sql = "SELECT nome_empresa, id_empresa FROM empresa";
        $result = mysqli_query($mysqli, $sql);
        
        $sql2 = "SELECT * FROM tarifa";
        $result2 = mysqli_query($mysqli, $sql2);
       ?>
        <div>
        <h2>Cadastro de nova linha</h2>
        <form action="cadastrarLinha_bd.php" method="post">
            EMPRESA <br>
            <select id="select" name="empresa">
              <option value=""> Selecione uma empresa </option>              
               <?php
                while ($dados = mysqli_fetch_assoc($result)){
               ?>     
                <option value="<?php echo $dados['id_empresa']?>">
                    <?php echo $dados ['nome_empresa']?>
                </option>
                <?php
                }
                ?>
            </select> <br>
            <br>
            CÓDIGO <br>
            <input id="input" type="text" name="codigo"> <br>
            <br>
            LINHA <br>
            <input id="input" type="text" name="linha"> <br>
            <br>
            TIPO <br>
            <select id="select" name="tipo">
                <option value=""> Selecione tipo da linha </option>
                <option value="Municipal - Florianopolis"> Municipal - Florianópolis </option>
                <option value="Executivo - Florianopolis"> Executivo - Florianópolis </option>
                <option value="Intermunicipal"> Intermunicipal </option>
                <option value="Executivo - Intermunicipal"> Executivo - Intermunicipal </option>
                <option value="Municipal - São José"> Municipal - São José </option>
                <option value="Municipal - Palhoça"> Municipal - Palhoça </option>
                <option value="Municipal - Biguaçu"> Municipal - Biguaçu </option>
                <option value="Municipal - Antônio Carlos"> Municipal - Antônio Carlos </option>
            </select> <br>
            <br>
            TARIFA <br>
            <select id="select" name="tarifa">
              <option value=""> Selecione tipo de tarifa </option>              
               <?php
                while ($dados = mysqli_fetch_assoc($result2)){
               ?>     
                <option value="<?php echo $dados['id_tarifa']?>">
                    <?php echo $dados ['tipo_tarifa']?>
                </option>
                <?php
                }
                ?>
            </select> <br>
            <br>
            <input type="submit" value="CADASTRAR"> <br>
            <br>
            <a href="listarLinhas.php"> VOLTAR </a> <br>
        </form>
    </div>

</body>

</html>