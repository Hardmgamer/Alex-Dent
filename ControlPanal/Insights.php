<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<div class="Heading">
	<div class="Textheading"><i class="fas fa-cog"></i><p>Insights</p></div>
</div>
<div class="secBody">
<div class="chart">
<canvas id="myChart"></canvas>
</div>
</div>
<?php
$date = date('Y-m-00');

$dd = DB::query('SELECT * FROM userpmonth WHERE month = :d', array(':d'=>$date));
if(empty($dd)){
  DB::query('INSERT INTO userpmonth VALUES(:count, STR_TO_DATE(:month, "%Y-%m-00"))', array(':count'=>0,':month'=>$date));
}
function dismcount($x){
	$date = date('Y-m-00', strtotime('-' . $x . ' Month'));
	$d = DB::query('SELECT * FROM userpmonth WHERE month = :d', array(':d'=>$date));
	if(empty($d)){
		$d = 0;
		}
	else{
		$d = $d[0]['count'];
	}
	return $d;
}
// echo dismcount('0');
?>
<script>var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
	    type: 'line',
    	data: {
	        labels: [<?php echo '"' . date('M', strtotime('-6 month')) . '"';?>, <?php echo '"' . date('M', strtotime('-5 month')) . '"';?>,
					<?php echo '"' . date('M', strtotime('-4 month')) . '"';?>, <?php echo '"' . date('M', strtotime('-3 month')) . '"';?>,
					 <?php echo '"' . date('M', strtotime('-2 month')) . '"';?>, <?php echo '"' . date('M', strtotime('-1 month')) . '"';?>,
					  <?php echo '"' . date('M') . '"';?>],
	        datasets: [{
	            label: "Visitors Per Month",
	            backgroundColor: 'rgba(255, 99, 132, 0.2)',
	            borderColor: 'rgb(255, 99, 132)',
							data: [<?php for($i = 6; $i >= 0; $i--){echo dismcount($i) . ', '; }?>],
        }]
    },
    options: {}
});</script>
