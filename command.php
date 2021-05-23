<canvas id="chart_command" width="600" height="500"></canvas>
<script>
//d3.csv('https://s3-us-west-2.amazonaws.com/s.cdpn.io/2814973/atp_wta.csv')
	d3.dsv(';', 'logs/command.csv').then(makeChart);

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
	var chart = new Chart('chart_command', {
		type: 'line',
		data: {
			labels: dateLabels,
			datasets: [{
				label: 'Command time',
				data: profitData,
				borderColor: 'rgb(225, 39, 32)',
				backgroundColor: 'rgb(225,39,32)',
				borderWidth: 0,
				pointRadius: 1
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
						min: -20,
						max: 20
					}
				}]
			}
		}
	});
} 
</script>
