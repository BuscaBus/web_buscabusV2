let selectTerminal = document.getElementById('terminal');

selectTerminal.onchange = function (){
    let selectBox = document.getElementById('box');
    let valor = selectTerminal.value;

    fetch("selectBox.php?terminal=" + valor)
        .then(response =>{
            return response.text();
        })
        .then(box =>{
            selectBox.innerHTML = box;       
        });    
}