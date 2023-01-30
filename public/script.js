var BAChartDataValue = [
	 
	4509442765,
	605034846, 
	
	 
]; /* -------- */
var BAChartDataLabel = [
	'______Current coin quantity-4,509,442,765', 
	'Total Burn-605,034,846______', 
]; /* ------ */
var BAChartJobErrColors = [
	'#FF9700',
    '#00C4F4',
];

var BAChartCountTotal = 0;
if (BAChartDataValue.length > 0) {
	BAChartCountTotal = BAChartDataValue.reduce(function(acc, currentVal, currentIdx, arr){
		return acc = currentVal;
	}, 0);
}

window.addEventListener('load', function(){
	var BAChartCtx = document.getElementById('BA-chart-job-error').getContext('2d');
	var BAChartJobErr = new Chart(BAChartCtx, {
		type: 'doughnut',
		data: {
			labels: BAChartDataLabel,
			datasets: [{
				data: BAChartDataValue,
				backgroundColor: BAChartJobErrColors,
				borderColor: '#ff000000',
				borderWidth: 2,
                fontStyle: 'bold',
                fontSize: 12,
                fontColor: '#FFFFFF',

			}]
		},
		options: {
			responsive: false,
			maintainAspectRatio: false,
			title: {
				display: true,
				position: 'top',
				fontSize: 12,
				fontColor: '#FFFFFF',
				fontStyle: 'bold',
				padding: 24,
				text: '',
			},
			plugins: {
				labels: [
					{
						render: 'label',
						fontColor: '#FFFFFF',
						position: 'outside',
				        padding: 24,
                        fontSize: 12,
					},
					{
						render: 'percentage',
						fontColor: '#fff',
					}
				],
				doughnutlabel: {
					labels: [
						{
							text: 'Max Total Supply: 5,114,477,611 ',
                            color: '#FFFFFF'
						}
					]
				}
			},
			legend: {
				display: false
			}
		}
	});
});