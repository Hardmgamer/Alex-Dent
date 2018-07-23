<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<div class="Heading">
	<div class="Textheading"><i class="fas fa-cog"></i><p>Insights</p></div>
</div>
<div class="secBody">
<div class="chart">
<canvas id="myChart"></canvas>
</div>
</div>
<script>var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
	    type: 'line',
    	data: {
	        labels: ["January", "February", "March", "April", "May", "June", "July"],
	        datasets: [{
	            label: "My First dataset",
	            backgroundColor: 'rgba(255, 99, 132, 0)',
	            borderColor: 'rgb(255, 99, 132)',
							data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },
    options: {}
});</script>
