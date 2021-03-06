new Chart(
	$( '#buildQuantity' ),
	{
		type: 'bar',
		data: {
			labels: build_keys,
			datasets: [
				{
					label: 'Number of builds',
					data: build_total_builds,
					backgroundColor: "rgba(63,166,98,0.4)",
					borderColor: "rgba(63,166,98,1)",
					yAxisID: 'y-axis-1',
				},
				{
					label: 'Total time taken in seconds',
					data: build_total_duration,
					backgroundColor: "rgba(241,196,15,0.4)",
					borderColor: "rgba(241,196,15,1)",
					yAxisID: 'y-axis-0',
				}
			]
		},
		options: {
			scales: {
				yAxes: [{
					position: 'left',
					id: 'y-axis-0',
					ticks: {
						suggestedMin: 300,
					}
				},{
					position: 'right',
					id: 'y-axis-1',
					gridLines: {
						display: false
					},
					ticks: {
						suggestedMin: 0,
						suggestedMax: 3,
						stepSize: 1,
					}
				}],
				xAxes: [{
					type: 'time',
					time: {
						unit: 'day',
					},
					ticks: {
						autoSkip: true,
						maxTicksLimit: 30
					}
				}]
			}
		}
	}
);
