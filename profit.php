<canvas id="chart_profit" width="600" height="500"></canvas>
<script>
//d3.csv('https://s3-us-west-2.amazonaws.com/s.cdpn.io/2814973/atp_wta.csv')
	d3.dsv(';', 'logs/profit.csv').then(makeChart);

function makeChart(profit) {
	var idLabels = profit.map(function(d) {
		return d['Coin name']
	});
	var profitData = profit.map(function(d) {
		//console.log(d);
		return d['Profit percent']
	});

	var chart = new Chart('chart_profit', {
		type: 'bar',
		data: {
			labels: idLabels,
			datasets: [{
				label: 'Profit percent',
				data: profitData,
				borderColor: 'rgb(0, 0, 0)',
				borderWidth: 2,
				backgroundColor: 'rgb(225, 39, 32)' /*function(context){
					if(context.tick.value > 100) { return 'rgb(225,39,32)';}
					else{ return 'rgb(100,100,210)';}
					}*/
			}]
		},
		options: {
			responsive: true,
			plugins: {
				legend: {
					position: 'left',
					display: true
				},
				title: {
					display: true,
					text: 'Chart.js Bar Chart'
				}
			},
			scales: {
				xAxes: [{
					  gridLines: {
						display: true,
						drawOnChartArea: true,
						drawTicks: true,
						borderWidth: 2,
						lineWidth: 2
					  },
					ticks: {
						autoSkip: false,
						autoSkipPadding: 30,
						maxRotation: 90,
						minRotation: 90,
						fontColor: "white"
					}
				}],
				yAxes: [{
					gridLines: {
						display: true,
						drawOnChartArea: true,
						drawTicks: true,
						borderWidth: 2,
						lineWidth: 3,
						color: '#555',
					}
				}]
			}
		}
	});
var dataset = chart.data.datasets[0];
dataset.backgroundColor = [];
dataset.backgroundColor.length = dataset.data.length;
for (var i = 0; i < dataset.data.length; i++) {
  if (dataset.data[i] < 100) {
    dataset.backgroundColor[i] = 'rgb(225, 56, 27)'; 
  }
  else{
   dataset.backgroundColor[i] = 'rgb(45, 189, 52)';
  }
}
chart.update();
//console.log(chart.data);
} 

</script>
