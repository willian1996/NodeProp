var contexto = document.getElementById("grafico").getContext("2d");

function ret(param){
    var valores = [];
    $.each(param, function(key, val){
        valores.push(val);
    });

    return valores;
}


//PEGANDO OS VALORES DO JSON NO ARQUIVO

$.getJSON("relatorios/trafego_mensal/", function(resposta){




var grafico = new Chart(contexto, {
    type: 'line',
    data: {
        labels: Object.keys(resposta),
        datasets: [{
            label: 'Vendas',
            backgroundColor: '#F00',
            borderColor: '#F00',
            data: ret(resposta),
            fill: false,
        },


                   /*{
            label: 'Custos',
            backgroundColor: '#0F0',
            borderColor: '#00F',
            data: [
                2,
                5,
                8,
                10,
                1
            ]
        }*/],

    }

});


});
