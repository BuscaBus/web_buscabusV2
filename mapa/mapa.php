<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <title>Mapa</title>
    <link rel="stylesheet" href="./estilo.css">
    <style>
        #map { 
            height: 550px; 
            width: 100%;
        }
    </style>    
</head>

<body>
    <h1>Sistema BuscaBus</h1>
    <a href ="../principal.php"> VOLTAR </a> <br>
    <hr>
    <div id="map">
    
    </div>
    <script src="../js/scriptMap.js"></script>
</body>

</html>