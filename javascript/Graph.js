var chart1;
$(document).ready(function () 
{
	chart1 = new Highcharts.Chart({
	chart: 
	{
		renderTo: 'Graphique',
		type: 'line',
       	zoomType: 'x',
	},
	title: 
	{
		text: "Courbe d'une fonction monstre"
	},
	xAxis: 
	{
		min: -2.0,
		max: 2.0,
		title: 
		{
			text: 'x'
		}
	},
	yAxis: 
	{
		title: 
		{
			text: 'y'
		}
	},
	series: [
	{
		name: 'Courbe',
		data: [ 
			<?php
				for ($x = -2.00; $x <= 2.00; $x += 0.001) 
				{
					$f_x = 0;
					for ($k = 0.0; $k <= $_POST['value_k']; $k++) 
					{
						$f_x += ((cos(pow($_POST['value_a'], $k) * pi() * $x)) / (pow(2, $k)));
					}
					echo "[$x, $f_x], ";
				}
			?>
		]
	}]
	});
});