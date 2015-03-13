<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="button.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="./javascript/highcharts.js"></script>
		<link rel="icon" type="image/png" href="./favicon.ico">
		<script type="text/javascript">
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
						color: "#99CC00",
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
		</script>	
		<title>108 Monster - GRRR !!</title>
	</head>
	
	<body>

		<p>Mathématiques: Projet 108monstre -- GRR !!</p>

		<table style="margin-left: 76%;">
			<tr>
				<form method="post" action="108monstre.php">
					<td>Valeur de a : <input type="text" name="value_a" <?php if (isset($_POST['form2'])) { echo 'value="'.$_POST['value_a'].'"'; } ?> /></td>
			</tr>
			<tr>
					<td> Valeur de k : <input type="text" name="value_k" <?php if (isset($_POST['form2'])) { echo 'value="'.$_POST['value_k'].'"'; } ?> /></td>
			</tr>
			<tr>
					<td><input style="color: white;" id="button" class="bouton noir" type="submit" name="form2" value="Visualiser" /></td>
				</form>
			</tr>
		</table>

		<div id="Graphique" style="width: 53%; height: 570px;"></div>
	</body>
</html>