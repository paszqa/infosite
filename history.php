<canvas id="chart" width="600" height="500"></canvas>
<script>
//d3.csv('https://s3-us-west-2.amazonaws.com/s.cdpn.io/2814973/atp_wta.csv')
	d3.dsv(';', 'logs/history.csv').then(makeChart);

function makeChart(profit) {
	//	var playerLabels = players.map(function(d) {return d.Name});
	var dateLabels = profit.map(function(d) {
		return d['Date']
	});
	//	var weeksData = players.map(function(d) {return d.Weeks});
	var profitData = profit.map(function(d) {
		return d['Current profit']
	});
	var valueData = profit.map(function(d) {
		return d['Current value']
	});
	var chart = new Chart('chart', {
		type: 'line',
		data: {
			labels: dateLabels,
			datasets: [{
				label: 'Current profit',
				data: profitData,
				borderColor: 'rgb(225, 39, 32)',
				backgroundColor: 'rgb(225,39,32)',
				borderWidth: 0,
				pointRadius: 1
			}, {
				label: 'Current value',
				data: valueData,
				borderColor: 'rgb(0,254,50,50)',
				backgroundColor: 'rgb(0,254,50,50)',
				font: {
					size: 20,
					weight: 100
				}
			}]
		},
		options: {
			responsive: true,
			plugins: {
				legend: {
					position: 'left',
					labels: {
						font: {
							size: 2
						}
					}
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
						z: 10000,
						borderWidth: 2,
						lineWidth: 3,
						color: '#555',
					}
				}]
			}
		}
	});
} 
</script>
