<canvas id="chart_ram" width="600" height="500"></canvas>
<script>
//d3.csv('https://s3-us-west-2.amazonaws.com/s.cdpn.io/2814973/atp_wta.csv')
	d3.dsv(';', 'logs/ram.csv').then(makeChart);

var pointBackgroundColors = [];
function makeChart(profit) {
	//	var playerLabels = players.map(function(d) {return d.Name});
	var dateLabels = profit.map(function(d) {
		return d['Date']
	});
	//	var weeksData = players.map(function(d) {return d.Weeks});
	var profitData = profit.map(function(d) {
		//console.log(d);
		return d['Result'];
	});
	var chart = new Chart('chart_ram', {
		type: 'line',
		data: {
			labels: dateLabels,
			datasets: [{
				label: 'Free RAM %',
				data: profitData,
				borderColor: 'rgba(225, 11, 11, 0)',
				backgroundColor: 'rgba(225,11,32,0)',
				borderWidth: 0,
				pointRadius: 1,
				pointBackgroundColor: pointBackgroundColors
			}]
		},
		options: {
			responsive: true,
			plugins: {
				legend: {
					position: 'left'
				},
				title: {
					display: true,
					text: 'Chart.js Bar Chart'
				}
			},
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: true,
						autoSkipPadding: 30,
						maxRotation: 90,
						minRotation: 90,
						fontSize: 12,
						fontColor: "white"
					}
				}],
				yAxes: [{
					gridLines: {
						display: true,
						drawOnChartArea: true,
						drawTicks: true,
						borderWidth: 2,
						lineWidth: 1,
						color: '#555'
					},
					ticks: {
						min: -0,
						max: 100
					}
				}]
			}
		}
	});
var dataset = chart.data.datasets[0];
//dataset.borderColor = [];
//dataset.borderColor.length = dataset.data.length;
for (var i = 0; i < dataset.data.length; i++) {
  if (dataset.data[i] < 15) {
    //dataset.borderColor[i] = 'rgb(225, 56, 27)'; 
    //dataset.points[0].fillColor = 'rgb(225, 56, 27)'; 
	pointBackgroundColors.push("#cc2222");
  }
  else{
   //dataset.borderColor[i] = 'rgb(45, 229, 52)';
    //dataset.points[0].fillColor = 'rgb(45, 229, 52)';
	pointBackgroundColors.push("#22cc22");
  }
}
chart.update();
//console.log(chart.data);
} 
</script>
