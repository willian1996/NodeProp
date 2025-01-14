// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

function ret(param){
    var valores = [];
    $.each(param, function(key, val){
        valores.push(val);
    });

    return valores;
}


//DADOS JSON VINDO DA CLASSE Relatorios.php
$.getJSON("relatorios/trafego_semanal/", function(resposta){

    // Bar Chart Example
    var ctx = document.getElementById("myBarChart");
    var myLineChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: Object.keys(resposta),
        datasets: [{
          label: "Revenue",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
          data: ret(resposta),
        }],
      }, 
      options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'month'
            },
            gridLines: {
              display: false
            },
            ticks: {
              maxTicksLimit: 6
            }
          }],
          yAxes: [{
            ticks: {
              min: 0,
              max: 100,
              maxTicksLimit: 5
            },
            gridLines: {
              display: true
            }
          }],
        },
        legend: {
          display: false
        }
      }
    });
    
});
