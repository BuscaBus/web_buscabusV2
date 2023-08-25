let selectEmpresa = document.getElementById('empresa');

selectEmpresa.onchange = function (){
    let selectLinha = document.getElementById('linha');
    let valor = selectEmpresa.value;

    fetch("selectLinha.php?empresa=" + valor)
        .then(response =>{
            return response.text();
        })
        .then(linha =>{
            selectLinha.innerHTML = linha;       
        });    
}

