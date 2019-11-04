<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../js/Chart.min.js"></script>
	<style type="text/css">
		#myChart{
			max-width: 40%
		}
	</style>
</head>
<body>
<canvas id="myChart"></canvas>
<?php 
	require_once("ventas.php");
	$obj = new ventas();
 ?>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [<?php $obj->etiquetaVenta(); ?>],
        datasets: [{
            label: 'Existencia de Ventas',
            data: [ <?php $obj->datosVenta();?>],
            backgroundColor: [
                'RGB(255, 255, 205)',
                'RGB(192, 192, 192)',
                'RGB(128, 128, 128)',
                'RGB(0, 0, 0)',
                'RGB(255, 0, 0)',
                'RGB(128, 0, 0)',
                'RGB(255, 255, 0)',
                'RGB(128, 128, 0)',
                'RGB(0, 255, 0)',
                'RGB(0, 128, 0)',
                'RGB(0, 255, 255)',
                'RGB(0, 128, 128)',
                'RGB(0, 0, 255)',
                'RGB(0, 0, 128)',
                'RGB(255, 0, 255))',
                'RGB(128, 0, 128))'

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
</body>
</html>