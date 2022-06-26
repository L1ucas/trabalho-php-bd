
$("#pedidos").hide();

let montante = document.getElementById("total-montante")
let tempo = document.getElementById("tempo-dias")
let capital = document.getElementById("capital-reais")
let juros = document.getElementById("juros")

$("#solicitar").click(function(){
    $("#pedidos")
    $("#pedidos").show(1000, "swing");
  }); 
function update() {
    if(juros.value == "1") {
        montante.value = Number(capital.value) * ((1 + 0.05)^Number(tempo.value))
    }
    else if (juros.value == "2"){
        montante.value = Number(capital.value) * Number(tempo.value) * 0.09
    }
}
